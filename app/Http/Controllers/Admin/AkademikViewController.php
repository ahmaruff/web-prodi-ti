<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\InfoAkademik;
use Illuminate\Http\Request;

class AkademikViewController extends Controller
{
    /**
         * ASUMSI:
         * ID 1 = KURIKULUM
         * ID 2 = TUGAS AKHIR
         * ID 3 = KERJA PRAKTEK
         * ID 4 = MBKM
         * ID 5 = KALENDER AKADEMIK
    */
    public function indexKurikulum(){
        $kurikulum = InfoAkademik::where('id', 1)->get(['id', 'judul', 'content_html', 'updated_at', 'dokumen'])->first();
        $data = [
            'data' => $kurikulum,
        ];
        return view('admin.akademik.show-one', $data);
    }

    public function indexTugasAkhir(){
        $tugas_akhir = InfoAkademik::where('id', 2)->get(['id', 'judul', 'content_html', 'updated_at', 'dokumen'])->first();
        $data = [
            'data' => $tugas_akhir,
        ];
        return view('admin.akademik.show-one', $data);
    }

    public function indexKerjaPraktek(){
        $kerja_praktek = InfoAkademik::where('id', 3)->get(['id', 'judul', 'content_html', 'updated_at', 'dokumen'])->first();
        $data = [
            'data' => $kerja_praktek,
        ];
        return view('admin.akademik.show-one', $data);
    }

    public function indexKampusMerdeka(){
        $kampus_merdeka = InfoAkademik::where('id', 4)->get(['id', 'judul', 'content_html', 'updated_at', 'dokumen'])->first();
        $data = [
            'data' => $kampus_merdeka,
        ];
        return view('admin.akademik.show-one', $data);
    }

    public function indexKalenderAkademik(){
        $kalender_akademik = InfoAkademik::where('id', 5)->get(['id', 'judul', 'content_html', 'updated_at', 'dokumen'])->first();
        $data = [
            'data' => $kalender_akademik,
        ];
        return view('admin.akademik.show-one', $data);
    }
}
