<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreArtikelRequest;
use App\Http\Requests\UpdateArtikelRequest;
use App\Models\Artikel;
use Illuminate\Support\Str;

class ArtikelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = [];
        return view('admin.artikel.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.artikel.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreArtikelRequest $request)
    {
        $validatedData = $request->validated();
        // parse to json content_json MARIA DB NOT SUPPORT json, it convert to longtext. so don't need to decode it
        // $validatedData['content_json'] = json_decode($validatedData['content_json']);

        // create slug
        $validatedData['slug'] = Str::slug($validatedData['title'],'-');

       // CHANGE DATA if is_published
       if(isset($validatedData['is_published'])){
        $validatedData['is_published'] = true;
        $validatedData['published_at'] = now();
       }

       $artikel = Artikel::create($validatedData);

       // if image isset
       if($request->file('image')->isValid()){
            $file = $validatedData['image'];
            $id = $artikel->id;
            $ext = $file->extension();
            // create filename
            $filename = "{$validatedData['category']}_{$id}_{$validatedData['slug']}.{$ext}";
            $file->storeAs('uploads/artikel',$filename,'public');

            $artikel = Artikel::where('id', $id)->update(['image' => $filename]);
       }
       return redirect(route('artikel.index'))->with('success', 'Artikel berhasil dibuat');
    }

    /**
     * Display the specified resource.
     */
    public function show(Artikel $artikel)
    {
        $data = [];
        return view('admin.artikel.show', $data);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Artikel $artikel)
    {
        $data = [];
        return view('admin.artikel.edit');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateArtikelRequest $request, Artikel $artikel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Artikel $artikel)
    {
        //
    }
}
