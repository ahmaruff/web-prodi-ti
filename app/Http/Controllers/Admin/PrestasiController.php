<?php

namespace App\Http\Controllers\Admin;

use App\Models\Prestasi;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class PrestasiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = [];
        return view('admin.kemahasiswaan.prestasi.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data = [];
        return view('admin.kemahasiswaan.prestasi.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $rules = [
            'juara' => ['required', 'string'],
            'nama_kompetisi' => ['required', 'string'],
            'tingkatan' => ['required', 'string'],
            'tanggal' => ['required', 'date'],
            'penyelenggara' => ['required', 'string'],
            'deskripsi' => ['required', 'string'],
            'image' => ['required', 'image']
        ];

        $validatedData = $request->validate($rules);
        // dd($validatedData);

        if($request->hasFile('image') && $request->file('image')->isValid()){
            $file = $validatedData['image'];
            $ext = $file->extension();
            $newname = $validatedData['juara'].'-'.$validatedData['nama_kompetisi'].'-'.$validatedData['tanggal'].'-'.uniqid();
            $newname = Str::slug($newname).'.'.$ext;

            $file->storeAs('uploads/kemahasiswaan/prestasi',$newname,'public');
            $validatedData['image'] = $newname;
        }

        Prestasi::create($validatedData);
        return redirect(route('admin.prestasi.index'))->with('success', 'Data prestasi telah ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Prestasi $prestasi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Prestasi $prestasi)
    {

        $data = [
            'prestasi' => $prestasi,
        ];
        return view('admin.kemahasiswaan.prestasi.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Prestasi $prestasi)
    {
        $rules = [
            'juara' => ['required', 'string'],
            'nama_kompetisi' => ['required', 'string'],
            'tingkatan' => ['required', 'string'],
            'tanggal' => ['required', 'date'],
            'penyelenggara' => ['required', 'string'],
            'deskripsi' => ['required', 'string'],
            'image' => ['nullable', 'image']
        ];

        $validatedData = $request->validate($rules);
        // dd($validatedData);

        if($request->hasFile('image') && $request->file('image')->isValid()){
            $file = $validatedData['image'];
            $ext = $file->extension();
            $newname = $validatedData['juara'].'-'.$validatedData['nama_kompetisi'].'-'.$validatedData['tanggal'].'-'.uniqid();
            $newname = Str::slug($newname).'.'.$ext;

            //remove old file
            Storage::disk('public')->delete('uploads/kemahasiswaan/prestasi/'.$prestasi->image);

            $file->storeAs('uploads/kemahasiswaan/prestasi',$newname,'public');
            $validatedData['image'] = $newname;
        }

        $prestasi->update($validatedData);
        return redirect(route('admin.prestasi.index'))->with('success', 'Data prestasi telah diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Prestasi $prestasi)
    {
        // remove old file
        Storage::disk('public')->delete('uploads/kemahasiswaan/prestasi/'.$prestasi->image);
        $prestasi->delete();
        return redirect(route('admin.prestasi.index'))->with('success', 'data prestasi telah dihapus');
    }
}
