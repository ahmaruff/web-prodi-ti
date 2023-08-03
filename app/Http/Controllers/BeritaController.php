<?php

namespace App\Http\Controllers;

use App\Models\Artikel;
use Illuminate\Http\Request;

class BeritaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       $pengumuman = Artikel::where('category', 'pengumuman')->where('is_published', true)->orderBy('published_at', 'DESC')->take(3)->get(['image','id', 'title', 'slug', 'published_at', 'category']);
       $artikel = Artikel::where('is_published', true)->orderBy('published_at', 'DESC')->get(['image','id', 'title', 'slug', 'published_at', 'category']);

       $data = [
        'pengumuman_terkini' => $pengumuman,
        'artikel' => $artikel,
       ];

       return view('public.berita.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show($category, $id, $slug)
    {
        $artikel = Artikel::where('is_published', true)->where('category', $category)->where('id', $id)->where('slug', $slug)->get(['title','image', 'published_at', 'category', 'author', 'content_html'])->first();

        $data = [
            'artikel' => $artikel,
        ];

        return view('public.berita.show', $data);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Artikel $artikel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Artikel $artikel)
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
