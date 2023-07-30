<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Fasilitas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class FasilitasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $fasilitas = Fasilitas::get(['id', 'nama', 'deskripsi'])->toArray();
        $data = [
            'fasilitas' => $fasilitas
        ];

        return view('admin.fasilitas.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.fasilitas.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $rules = [
            'nama' => ['required', 'string'],
            'deskripsi' => ['nullable', 'string'],
            'image' => ['nullable', 'image'],
        ];

        $validatedData = $request->validate($rules);
        if($request->file('image') && $request->file('image')->isValid()){
            $file = $request->file('image');
            $ext = $file->extension();

            $newfilename = Str::slug($validatedData['nama']).'_'.uniqid().'.'.$ext;
            // store
            $file->storeAs('uploads/fasilitas', $newfilename, 'public');

            $validatedData['image'] = $newfilename;
        }

        Fasilitas::create($validatedData);
        return redirect(route('admin.fasilitas.index'))->with('success', 'fasilitas baru telah ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Fasilitas $fasilitas)
    {
        $data = [
            'fasilitas' => $fasilitas,
        ];

        return view('admin.fasilitas.show',$data);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Fasilitas $fasilitas)
    {
        $data = [
            'fasilitas' => $fasilitas
        ];

        return view('admin.fasilitas.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Fasilitas $fasilitas)
    {
        $rules = [
            'nama' => ['required', 'string'],
            'deskripsi' => ['nullable', 'string'],
            'image' => ['nullable', 'image'],
        ];

        $validatedData = $request->validate($rules);
        if($request->file('image') && $request->file('image')->isValid()){
            $file = $request->file('image');
            $ext = $file->extension();

            $newfilename = Str::slug($validatedData['nama']).'_'.uniqid().'.'.$ext;

            // remove old file
            Storage::disk('public')->delete('uploads/fasilitas/'.$fasilitas->image);

            // store new file
            $file->storeAs('uploads/fasilitas', $newfilename, 'public');

            $validatedData['image'] = $newfilename;
        }

        $fasilitas->update($validatedData);
        return redirect(route('admin.fasilitas.index'))->with('success', 'fasilitas telah diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Fasilitas $fasilitas)
    {
        // remove old file
        Storage::disk('public')->delete('uploads/fasilitas/'.$fasilitas->image);
        $fasilitas->delete();
        return redirect(route('admin.fasilitas.index'))->with('success', 'fasilitas telah dihapus');
    }
}
