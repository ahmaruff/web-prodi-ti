<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\InfoAkademik;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class InfoAkademikController extends Controller
{
    /**
         * ASUMSI:
         * ID 1 = KURIKULUM
         * ID 2 = TUGAS AKHIR
         * ID 3 = KERJA PRAKTEK
         * ID 4 = MBKM
         * ID 5 = KALENDER AKADEMIK
    */

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kurikulum = InfoAkademik::where('judul','Kurikulum')->get('id', 'judul', 'dokumen', 'content_html')->first();
        $kurikulum = InfoAkademik::where('judul','Kurikulum')->get('id', 'judul', 'dokumen', 'content_html')->first();
        return view('admin.akademik.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.akademik.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $rules = [
            'judul' => ['required', 'string'],
            'dokumen' => ['nullable', 'file', 'mimes:pdf,jpg,png,jpeg'],
            'content_html' => ['nullable', 'string'],
            'content_json' => ['nullable', 'string'],
        ];

        $validatedData = $request->validate($rules);

        $validatedData['slug'] = Str::slug($validatedData['judul']);

        if($request->file('dokumen') && $request->file('dokumen')->isValid()){
            $file = $validatedData['dokumen'];
            $ext = $file->extension();

            $newfilename = 'info-akademik_'.$validatedData['slug'].'_'.uniqid().'.'.$ext;

            $file->storeAs('uploads/akademik',$newfilename, 'public');

            $validatedData['dokumen'] = $newfilename;
        }

        InfoAkademik::create($validatedData);
        return redirect(route('admin.akademik.info-akademik.index'))->with('success', 'data info akademik berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(InfoAkademik $info_akademik)
    {
        $data = [
            'info_akademik' => $info_akademik,
        ];

        return view('admin.akademik.show', $data);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(InfoAkademik $info_akademik)
    {
        $data = [
            'info_akademik' => $info_akademik,
        ];

        return view('admin.akademik.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, InfoAkademik $info_akademik)
    {
        $rules = [
            'judul' => ['required', 'string'],
            'dokumen' => ['nullable', 'file', 'mimes:pdf,jpg,png,jpeg'],
            'content_html' => ['nullable', 'string'],
            'content_json' => ['nullable', 'string'],
        ];

        $validatedData = $request->validate($rules);

        $validatedData['slug'] = Str::slug($validatedData['judul']);

        if($request->file('dokumen') && $request->file('dokumen')->isValid()){
            $file = $validatedData['dokumen'];
            $ext = $file->extension();

            $newfilename = 'info-akademik_'.$validatedData['slug'].'_'.uniqid().'.'.$ext;

            //REMOVE OLD FILe
            Storage::disk('public')->delete('uploads/akademik/'.$info_akademik->dokumen);
            $file->storeAs('uploads/akademik',$newfilename, 'public');

            $validatedData['dokumen'] = $newfilename;
        }

        $info_akademik->update($validatedData);
        return redirect(route('admin.akademik.info-akademik.index'))->with('success', 'data info akademik berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(InfoAkademik $info_akademik)
    {
        return redirect(route('admin.akademik.info-akademik.index'))->with('success', 'data info akademik berhasil dihapus');
    }
}
