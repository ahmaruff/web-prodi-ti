<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Dosen;
use App\Models\Profil\Misi;
use App\Models\Profil\Tujuan;
use App\Models\Profil\Visi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

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
                Tujuan::where('id', $data->id)->update(['tujuan' => $data->tujuan, 'updated_at' => now()]);
            }else {
                Tujuan::create(['tujuan' => $data->tujuan]);
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

    // STRUKTUR ORGANISASI
    public function indexStrukturOrg() {
        $kaprodi = Dosen::where('jabatan_struktural', 'Ketua Program Studi Teknik Informatika')->get()->last();
        $sekprodi = Dosen::where('jabatan_struktural', 'Sekretaris Program Studi Teknik Informatika')->get()->last();

        $list_dosen = DB::table('dosens')->get(['id', 'nama'])->toArray();

        $struktur_path = Storage::disk('public')->get('/uploads/struktur.txt');
        $img_struktur = Storage::url("/uploads/{$struktur_path}");
        $data = [
            'kaprodi' => $kaprodi,
            'sekprodi' => $sekprodi,
            'img_struktur' => $img_struktur,
            'list_dosen' => $list_dosen,
        ];

        return view('admin.profil.struktur-organisasi', $data);
    }

    public function updateKaprodi(Request $request){
        $rules = [
            'kaprodi' => ['required']
        ];

        $validatedData = $request->validate($rules);

        // hapus/update kaprodi lama
        Dosen::where('jabatan_struktural', 'Ketua Program Studi Teknik Informatika')->update(['jabatan_struktural' => 'Dosen']);

        // update kaprodi baru
        Dosen::where('id', $validatedData['kaprodi'])->update(['jabatan_struktural' => 'Ketua Program Studi Teknik Informatika']);

        return redirect(route('admin.profil-prodi.struktur'))->with('success', 'kaprodi telah di update');
    }

    public function updateSekprodi(Request $request){
        $rules = [
            'sekprodi' => ['required']
        ];

        $validatedData = $request->validate($rules);

        // hapus/update kaprodi lama
        Dosen::where('jabatan_struktural', 'Sekretaris Program Studi Teknik Informatika')->update(['jabatan_struktural' => 'Dosen']);

        // update kaprodi baru
        Dosen::where('id', $validatedData['sekprodi'])->update(['jabatan_struktural' => 'Sekretaris Program Studi Teknik Informatika']);

        return redirect(route('admin.profil-prodi.struktur'))->with('success', 'sekprodi telah di update');
    }

    public function updateBagan(Request $request){
        $rules = [
            'gambar_bagan' => ['required', 'image']
        ];

        $validatedData = $request->validate($rules);

        $file = $validatedData['gambar_bagan'];
        if($file->isValid()){
            // remove old image
            $oldfile = Storage::disk('public')->delete('/uploads/struktur.txt');
            // Storage::disk('public')->delete($oldfile);

            // save new file
            $ext = $file->extension();
            $newfilename = 'struktur-organisasi-ti.'.$ext;

            $file->storeAs('uploads',$newfilename, 'public');

            // save new name
            Storage::disk('public')->put('/uploads/struktur.txt',$newfilename.PHP_EOL);
        }

        return redirect(route('admin.profil-prodi.struktur'))->with('success', 'bagan telah di update');
    }
}
