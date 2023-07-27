<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Profil\Misi;
use App\Models\Profil\Tujuan;
use App\Models\Profil\Visi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
        $visi = DB::table('visis')->get()->last();
        $misi = DB::table('misis')->get(['id','misi']);
        $tujuan = DB::table('tujuans')->get(['id','tujuan']);
        $data = [
            'visi' => $visi,
            'misi' => $misi,
            'tujuan' => $tujuan
        ];

        return view('admin.profil.edit-visi-misi', $data);
    }

    public function updateVisi(Request $request)
    {
        $rules = [
            'id' => ['required'],
            'visi' => ['required', 'string']
        ];

        $validatedData = $request->validate($rules);

        $update = Visi::where('id', $validatedData['id'])->update([ 'visi' => $validatedData['visi']]);
        return redirect(route('admin.profil-prodi.edit'))->with('success', 'visi telah terupdate');
    }

    public function updateMisi(Request $request)
    {
        $rules = [
            'upsert' => ['required', 'string'],
            'delete' => ['required', 'string']
        ];
        $validatedData = $request->validate($rules);

        $upsert = json_decode($validatedData['upsert']);
        $delete = json_decode($validatedData['delete']);

        // UPDATE or INSERT
        foreach($upsert as $data) {
            if($data->id != ''){
                Misi::where('id', $data->id)->update(['misi' => $data->misi, 'updated_at' => now()]);
            }else {
                Misi::create(['misi' => $data->misi]);
            }
        }

        // DELETE
        foreach($delete as $data){
            if($data->id !=''){
                Misi::where('id', $data->id)->delete();
            }
        }

        return redirect(route('admin.profil-prodi.edit'))->with('success', 'misi telah terupdate');
    }

    public function updateTujuan(Request $request)
    {
        $rules = [
            'upsert' => ['required', 'string'],
            'delete' => ['required', 'string']
        ];
        $validatedData = $request->validate($rules);

        $upsert = json_decode($validatedData['upsert']);
        $delete = json_decode($validatedData['delete']);

        // UPDATE or INSERT
        foreach($upsert as $data) {
            if($data->id != ''){
                Tujuan::where('id', $data->id)->update(['tujuan' => $data->misi, 'updated_at' => now()]);
            }else {
                Tujuan::create(['tujuan' => $data->misi]);
            }
        }

        // DELETE
        foreach($delete as $data){
            if($data->id !=''){
                Tujuan::where('id', $data->id)->delete();
            }
        }

        return redirect(route('admin.profil-prodi.edit'))->with('success', 'tujuan telah terupdate');
    }
}
