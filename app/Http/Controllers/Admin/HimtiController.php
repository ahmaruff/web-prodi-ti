<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ProgramKerja;
use Illuminate\Http\Request;

class HimtiController extends Controller
{
    public function index(){
        return view('admin.kemahasiswaan.himti.index');
    }

    public function createProker(){
        return view('admin.kemahasiswaan.himti.create-proker');
    }

    public function storeProker(Request $request){
        $rules = [
            'judul' => ['required', 'string'],
            'deskripsi' => ['required', 'string'],
        ];
        $validatedData = $request->validate($rules);

        ProgramKerja::create($validatedData);
        return redirect(route('admin.himti.index'))->with('success', 'data proker telah ditambahkan');
    }

    public function editProker($id){
        $program_kerja = ProgramKerja::where('id', $id)->get()->first();
        $data = [
            'program_kerja' => $program_kerja,
        ];

        return view('admin.kemahasiswaan.himti.edit-proker', $data);
    }

    public function updateProker(Request $request, $id){
        $rules = [
            'judul' => ['required', 'string'],
            'deskripsi' => ['required', 'string'],
        ];
        $validatedData = $request->validate($rules);

        ProgramKerja::where('id', $id)->update($validatedData);
        return redirect(route('admin.himti.index'))->with('success', 'data proker telah diupdate');
    }

    public function destroyProker($id){
        ProgramKerja::where('id', $id)->delete();
        return redirect(route('admin.himti.index'))->with('success', 'data proker telah dihapus');
    }


}
