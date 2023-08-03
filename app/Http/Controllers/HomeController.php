<?php

namespace App\Http\Controllers;

use App\Models\Akreditasi;
use App\Models\Artikel;
use App\Models\Dosen;
use App\Models\Fasilitas;
use App\Models\InfoAkademik;
use App\Models\Profil\Misi;
use App\Models\Profil\ProfilLulusan;
use App\Models\Profil\Tujuan;
use App\Models\Profil\Visi;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {

        $profil_lulusan = ProfilLulusan::get(['id','profil_lulusan', 'deskripsi']);
        $berita_terbaru = Artikel::where('category', 'berita')->where('is_published', true)->orderBy('published_at', 'DESC')->take(3)->get(['image','id', 'title', 'slug', 'published_at', 'category']);
        $data = [
            'profil_lulusan' => $profil_lulusan->toArray(),
            'berita_terbaru' => $berita_terbaru->toArray(),
        ];
        return view('public.home', $data);
    }

    public function visiMisi() {
        $visi = Visi::get('visi')->first();
        $misi = Misi::get('misi');
        $tujuan = Tujuan::get('tujuan');

        $data = [
            'visi' => $visi,
            'misi' => $misi->toArray(),
            'tujuan' => $tujuan->toArray()
        ];

        return view('public.visi-misi', $data);
    }

    public function strukturOrg() {
        $kaprodi = Dosen::where('jabatan_struktural', 'Ketua Program Studi Teknik Informatika')->get()->first();
        $sekprodi = Dosen::where('jabatan_struktural', 'Sekretaris Program Studi Teknik Informatika')->get()->first();

        $dosen = Dosen::get(['id', 'nama', 'email', 'jabatan_akademik', 'image', 'homebase', 'nidn']);

        $data = [
            'kaprodi' => $kaprodi->toArray(),
            'sekprodi' => $sekprodi->toArray(),
            'dosen' => $dosen->toArray(),
        ];

        return view('public.struktur-org', $data);
    }

    public function infoAkademik(String $link) {
        /**
         * ASUMSI:
         * ID 1 = KURIKULUM
         * ID 2 = TUGAS AKHIR
         * ID 3 = KERJA PRAKTEK
         * ID 4 = MBKM
         * ID 5 = KALENDER AKADEMIK
        */

        if($link == 'kurikulum'){
            $id = 1;
        }else if($link == 'tugas-akhir'){
            $id = 2;
        }else if($link == 'kerja-praktek'){
            $id = 3;
        }else if($link == 'kampus-merdeka') {
            $id = 4;
        } else if($link == 'kalender-akademik') {
            $id = 5;
        }

        $info = InfoAkademik::where('id', $id)->get(['judul', 'dokumen', 'content_html'])->first();

        $data = [
            'info' => $info->toArray(),
        ];

        return view('public.info-akademik', $data);
    }

    public function akreditasi() {

        $akreditasi = Akreditasi::get([
        'id',
        'prodi',
        'no_sk',
        'tgl_terbit',
        'tgl_kadaluarsa',
        'peringkat',
        'status',
        'dokumen_sk', ]);

        $data = [
            'akreditasi' => $akreditasi->toArray()
        ];

        return view('public.akreditasi', $data);
    }

    public function fasilitas() {
        $fasilitas = Fasilitas::get(['nama', 'deskripsi', 'image']);
        $data = [
            'fasilitas' => $fasilitas->toArray()
        ];

        return view('public.fasilitas', $data);
    }

    public function pusatUnduhan(){
        $data = [];

        return view('public.pusat-unduhan', $data);
    }
}
