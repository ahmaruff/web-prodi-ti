<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Profil\ProfilLulusan;
use Illuminate\Http\Request;

class ProfilLulusanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $lulusan = ProfilLulusan::get();

        $data = [
            'lulusan' => $lulusan,
        ];

        return view('admin.profile-prodi.lulusan.index', $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $rules = [
            'profil_lulusan' => ['required', 'string'],
            'deskripsi' => ['required', 'string'],
        ];
        $validatedData = $request->validate($rules);
        ProfilLulusan::create($validatedData);

        return redirect(route('admin.profile-prodi.lulusan.index'))->with('success', 'profil lulusan telah dibuat');
    }

    /**
     * Display the specified resource.
     */
    public function show(ProfilLulusan $profile_lulusan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ProfilLulusan $lulusan)
    {
        // $lulusan = ProfilLulusan::where('id', $id)->first();
        $data = [
            'lulusan' => $lulusan,
        ];

        return view('admin.profile-prodi.lulusan.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ProfilLulusan $lulusan)
    {
        $rules = [
            'profil_lulusan' => ['required', 'string'],
            'deskripsi' => ['required', 'string'],
        ];
        $validatedData = $request->validate($rules);
        $lulusan->update($validatedData);
        // ProfilLulusan::where('id', $id)->update($validatedData);

        return redirect(route('admin.profile-prodi.lulusan.index'))->with('success', 'profil lulusan telah terupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ProfilLulusan $lulusan)
    {
        $lulusan->delete();
        // ProfilLulusan::where('id', $request->id)->delete();
        return redirect(route('admin.profile-prodi.lulusan.index'))->with('success', 'profil lulusan berhasil dihapus');
    }
}
