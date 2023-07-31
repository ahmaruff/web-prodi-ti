<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\EventMahasiswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class EventMahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = [];
        return view('admin.kemahasiswaan.event.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data = [];
        return view('admin.kemahasiswaan.event.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $rules = [
            'judul' => ['required', 'string', 'max:255'],
            'tanggal' => ['required', 'date'],
            'poster' => ['nullable', 'image', 'max:2048'],
            'content_html' => ['nullable', 'string'],
            'content_json' => ['nullable', 'string'],
        ];

        $validatedData = $request->validate($rules);

        // create slug
        $validatedData['slug'] = Str::slug($validatedData['judul'],'-');

        $event = EventMahasiswa::create($validatedData);

        // if image isset
        if($request->file('poster') && $request->file('poster')->isValid()){
                $file = $validatedData['poster'];
                $id = $event->id;
                $ext = $file->extension();
                // create filename
                $filename = "event_{$id}_{$validatedData['slug']}.{$ext}";
                $file->storeAs('uploads/kemahasiswaan/event',$filename,'public');

                $artikel = EventMahasiswa::where('id', $id)->update(['poster' => $filename]);
        }
        return redirect(route('admin.event-mahasiswa.index'))->with('success', 'Event berhasil dibuat');
    }

    /**
     * Display the specified resource.
     */
    public function show(EventMahasiswa $event_mahasiswa)
    {
        $data = [
            'event_mahasiswa' => $event_mahasiswa,
        ];
        return view('admin.kemahasiswaan.event.show', $data);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(EventMahasiswa $event_mahasiswa)
    {
        $data = [
            'event_mahasiswa' => $event_mahasiswa,
        ];
        return view('admin.kemahasiswaan.event.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, EventMahasiswa $event_mahasiswa)
    {
        $rules = [
            'judul' => ['required', 'string', 'max:255'],
            'tanggal' => ['required', 'date'],
            'poster' => ['nullable', 'image', 'max:2048'],
            'content_html' => ['nullable', 'string'],
            'content_json' => ['nullable', 'string'],
        ];

        $validatedData = $request->validate($rules);

        // create slug
        $validatedData['slug'] = Str::slug($validatedData['judul'],'-');

        // if image isset
        if($request->file('poster') && $request->file('poster')->isValid()){
            $file = $validatedData['poster'];
            $id = $event_mahasiswa->id;
            $ext = $file->extension();
            // create filename
            $filename = "event_{$id}_{$validatedData['slug']}.{$ext}";

            //REMOVE OLD FILE
            Storage::disk('public')->delete('uploads/kemahasiswaan/event/'.$event_mahasiswa->poster);

            $file->storeAs('uploads/kemahasiswaan/event',$filename,'public');

            $validatedData['poster'] = $filename;
        }

        $event_mahasiswa->update($validatedData);

        return redirect(route('admin.event-mahasiswa.index'))->with('success', 'Event berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(EventMahasiswa $event_mahasiswa)
    {
        //REMOVE OLD FILE
        Storage::disk('public')->delete('uploads/kemahasiswaan/event/'.$event_mahasiswa->poster);
        $event_mahasiswa->delete();
        return redirect(route('admin.event-mahasiswa.index'))->with('success', 'Event berhasil dihapus');
    }
}
