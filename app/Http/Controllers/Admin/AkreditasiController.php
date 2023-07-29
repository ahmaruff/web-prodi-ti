<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Akreditasi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use illuminate\Support\Str;

class AkreditasiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $akreditasi = Akreditasi::get();

        $data = [
            'akreditasi' => $akreditasi,
        ];

        return view('admin.profil.akreditasi.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.profil.akreditasi.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $rules = [
            'prodi' => ['required', 'string'],
            'peringkat' => ['required', 'string'],
            'no_sk' => ['required', 'string'],
            'tgl_terbit' => ['required', 'date'],
            'tgl_kadaluarsa' => ['required', 'date'],
            'status' => ['required', 'string'],
            'dokumen_sk' => ['required', 'file', 'mimes:pdf,doc,docx' ],
        ];

        $validatedData = $request->validate($rules);

        $akred = Akreditasi::create($validatedData);
        $file = $validatedData['dokumen_sk'];
        if($file->isValid()){
            $ext = $file->extension();
            $slug = Str::slug($validatedData['prodi']);
            $newfilename = 'akreditasi_'.$akred->id.'_'.$slug.'_'.$validatedData['tgl_terbit'].'.'.$ext;

            $file->storeAs('uploads/akreditasi',$newfilename, 'public');
            $akred->update(['dokumen_sk' => $newfilename]);
        }
        return redirect(route('admin.akreditasi.index'))->with('success', 'data akreditasi telah dibuat');

    }

    /**
     * Display the specified resource.
     */
    public function show(Akreditasi $akreditasi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Akreditasi $akreditasi)
    {
        $data = [
            'akreditasi' => $akreditasi
        ];

        return view('admin.profil.akreditasi.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Akreditasi $akreditasi)
    {
        $rules = [
            'prodi' => ['required', 'string'],
            'peringkat' => ['required', 'string'],
            'no_sk' => ['required', 'string'],
            'tgl_terbit' => ['required', 'date'],
            'tgl_kadaluarsa' => ['required', 'date'],
            'status' => ['required', 'string'],
            'dokumen_sk' => ['nullable', 'file', 'mimes:pdf,doc,docx' ],
        ];

        $validatedData = $request->validate($rules);

        if($request->file('dokumen_sk') && $request->file('dokumen_sk')->isValid()){
            $file = $validatedData['dokumen_sk'];

            // remove old file
            Storage::disk('public')->delete('uploads/akreditasi/'.$akreditasi->dokumen_sk);

            $ext = $file->extension();
            $slug = Str::slug($validatedData['prodi']);
            $newfilename = 'akreditasi_'.$akreditasi->id.'_'.$slug.'_'.$validatedData['tgl_terbit'].'.'.$ext;

            $file->storeAs('uploads/akreditasi',$newfilename, 'public');
            $validatedData['dokumen_sk'] = $newfilename;
        }
        $akreditasi->update($validatedData);
        return redirect(route('admin.akreditasi.index'))->with('success', 'data akreditasi telah diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Akreditasi $akreditasi)
    {
        $akreditasi->delete();
        return redirect(route('admin.akreditasi.index'))->with('success', 'data akreditasi telah dihapus');
    }
}
