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

        return view('admin.lulusan.index', $data);
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

        return redirect(route('admin.profile-lulusan.index'))->with('success', 'profil lulusan telah dibuat');
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
    public function edit(ProfilLulusan $profile_lulusan)
    {
        // $lulusan = ProfilLulusan::where('id', $id)->first();
        $data = [
            'lulusan' => $profile_lulusan,
        ];

        return view('admin.lulusan.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ProfilLulusan $profile_lulusan)
    {
        $rules = [
            'profil_lulusan' => ['required', 'string'],
            'deskripsi' => ['required', 'string'],
        ];
        $validatedData = $request->validate($rules);
        $profile_lulusan->update($validatedData);
        // ProfilLulusan::where('id', $id)->update($validatedData);

        return redirect(route('admin.profile-lulusan.index'))->with('success', 'profil lulusan telah terupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ProfilLulusan $profile_lulusan)
    {
        $profile_lulusan->delete();
        // ProfilLulusan::where('id', $request->id)->delete();
        return redirect(route('admin.profile-lulusan.index'))->with('success', 'profil lulusan berhasil dihapus');
    }
}
