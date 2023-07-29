<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreDosenRequest;
use App\Http\Requests\UpdateDosenRequest;
use App\Models\Dosen;
use Illuminate\Support\Str;
use Storage;

class DosenController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dosen = Dosen::all();
        $data = [
            'dosen' => $dosen
        ];

        return view('admin.profil.dosen.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data = [

        ];
        return view('admin.profil.dosen.create',$data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreDosenRequest $request)
    {
        $validatedData = $request->validated();

        if($request->file('image') && $request->file('image')->isValid()){

            $file = $request->file('image');
            $ext = $file->extension();

            // GENERATING FILENAME
            $filename = Str::lower($validatedData['nama']);
            $filename = substr($filename, 0, strpos($filename, ","));
            $filename = Str::slug($filename);
            $filename = $filename.'_'.uniqid().'.'.$ext;
            $file->storeAs('uploads/dosen',$filename,'public');

            $validatedData['image'] = $filename;
        }

        Dosen::create($validatedData);
        return redirect(route('admin.dosen.index'))->with('success', 'Data dosen telah ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Dosen $dosen)
    {
        $data = [
            'dosen' => $dosen,
        ];

        return view('admin.profil.dosen.show', $data);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Dosen $dosen)
    {
        $data = [
            'dosen' => $dosen,
        ];
        return view('admin.profil.dosen.edit',$data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateDosenRequest $request, Dosen $dosen)
    {
        $validatedData = $request->validated();

        if($request->file('image') && $request->file('image')->isValid()){

            //remove old image
            if(isset($dosen->image)){
                $oldfile = Storage::disk('public')->delete('/uploads/dosen/'.$dosen->image);
            }
            $file = $request->file('image');
            $ext = $file->extension();

            // GENERATING FILENAME
            $filename = Str::lower($validatedData['nama']);
            $filename = substr($filename, 0, strpos($filename, ","));
            $filename = Str::slug($filename);
            $filename = $filename.'_'.uniqid().'.'.$ext;
            $file->storeAs('uploads/dosen',$filename,'public');

            $validatedData['image'] = $filename;
        }
        Dosen::where('id', $dosen->id)->update($validatedData);
        // Dosen::create($validatedData);
        return redirect(route('admin.dosen.index'))->with('success', 'Data dosen telah diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Dosen $dosen)
    {
        // dd($dosen);
        $dosen->delete();
        return redirect(route('admin.dosen.index'))->with('success', 'Data dosen telah dihapus');
    }
}
