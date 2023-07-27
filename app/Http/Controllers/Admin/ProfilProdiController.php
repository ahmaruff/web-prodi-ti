<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ProfilProdiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $visi = DB::table('visis')->get('visi')->last();
        $misi = DB::table('misis')->get('misi');
        $tujuan = DB::table('tujuans')->get('tujuan');
        $data = [
            'visi' => $visi->visi,
            'misi' => $misi,
            'tujuan' => $tujuan
        ];

        return view('admin.profil.index', $data);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit()
    {
        $visi = DB::table('visis')->get('visi')->last();
        $misi = DB::table('misis')->get('misi');
        $tujuan = DB::table('tujuans')->get('tujuan');
        $data = [
            'visi' => $visi->visi,
            'misi' => $misi,
            'tujuan' => $tujuan
        ];

        return view('admin.profil.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        //
    }
}
