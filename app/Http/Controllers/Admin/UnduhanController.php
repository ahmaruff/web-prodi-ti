<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreUnduhanRequest;
use App\Http\Requests\UpdateUnduhanRequest;
use App\Models\Unduhan;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class UnduhanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $unduhan = Unduhan::get();
        $data = [
            'unduhan' => $unduhan,
        ];
        return view('admin.unduhan.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.unduhan.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreUnduhanRequest $request)
    {
        $validatedData = $request->validated();

        if(!$validatedData['is_link']){
            $file = $validatedData['path'];
            if($file->isValid()){
                $slug = Str::slug($validatedData['judul']);
                $ext = $file->extension();
                $newfilename = 'unduhan_'.$slug.'_'.uniqid().'.'.$ext;
                $file->storeAs('uploads/unduhan',$newfilename, 'public');
                $validatedData['path'] = $newfilename;
            }
        }

        Unduhan::create($validatedData);
        return redirect(route('admin.unduhan.index'))->with('success','data unduhan baru telah dibuat');
    }

    /**
     * Display the specified resource.
     */
    public function show(Unduhan $unduhan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Unduhan $unduhan)
    {
        $data = [
            'unduhan' => $unduhan
        ];

        return view('admin.unduhan.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateUnduhanRequest $request, Unduhan $unduhan)
    {
        $validatedData = $request->validated();
        if(isset($validatedData['is_link']) && isset($validatedData['path'])){
            if($validatedData['is_link']){
                // check if uploaded file present
                if(Storage::disk('public')->exists('/uploads/unduhan/'.$unduhan->path)){
                    // REMOVE OLD FILE
                    Storage::disk('public')->delete('/uploads/unduhan/'.$unduhan->path);
                }
            }
            else if(!$validatedData['is_link']) {
                $file = $validatedData['path'];
                if($file->isValid()){
                    // REMOVE OLD FILE
                    if(Storage::disk('public')->exists('uploads/unduhan/'.$unduhan->path)){
                        // REMOVE OLD FILE
                        Storage::disk('public')->delete('uploads/unduhan/'.$unduhan->path);
                    }

                    $slug = Str::slug($validatedData['judul']);
                    $ext = $file->extension();
                    $newfilename = 'unduhan_'.$slug.'_'.uniqid().'.'.$ext;

                    // save new file
                    $file->storeAs('uploads/unduhan',$newfilename, 'public');
                    $validatedData['path'] = $newfilename;
                }
            }
        }

        $unduhan->update($validatedData);
        return redirect(route('admin.unduhan.index'))->with('success','data unduhan baru telah dibuat');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Unduhan $unduhan)
    {
        if(!$unduhan->is_link){
            Storage::disk('public')->delete('uploads/unduhan/'.$unduhan->path);
        }
        $unduhan->delete();
        return redirect(route('admin.unduhan.index'))->with('success','data unduhan berhasil dihapus');
    }
}
