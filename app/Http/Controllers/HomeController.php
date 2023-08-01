<?php

namespace App\Http\Controllers;

use App\Models\Artikel;
use App\Models\Profil\ProfilLulusan;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {

        $profil_lulusan = ProfilLulusan::get(['id','profil_lulusan', 'deskripsi']);
        $berita_terbaru = Artikel::where('category', 'berita')->where('is_published', true)->latest()->get(['id', 'title', 'slug', 'published_at']);
        $data = [
            'profil_lulusan' => $profil_lulusan->toArray(),
            'berita_terbaru' => $berita_terbaru->toArray(),
        ];
        return view('public.home', $data);
    }
}
