<?php

namespace Database\Seeders;

use App\Models\Profil\ProfilLulusan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProfilLulusanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $lulusan = [
            [
                'profil_lulusan' => "System Analyst",
                'deskripsi' => "System Analyst adalah seseorang yang mempunyai kemampuan untuk bertanggungjawab dalam melakukan analisis terhadap sistem dalam suatu instansi atau perusahaan dan membuat solusi yang integratif dengan memanfaatkan perangkat lunak",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'profil_lulusan' => "Software Developer",
                'deskripsi' => "Software Developer adalah seseorang yang terlibat dalam fase-fase pengembangan perangkat lunak yang meliputi penggalian kebutuhan, analisis, perancangan, pemrograman, dan pengujian perangkat lunak",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'profil_lulusan' => "Database Administrator",
                'deskripsi' => "Database Administrator adalah seseorang yang pekerjaannya terkait dengan perancangan pengimplementasian, dan pemeliharaan basis data",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'profil_lulusan' => "Intelegent System Developer",
                'deskripsi' => "Intelegent System Developer adalah seseorang yang mampu mengembangkan perangkat lunak yang bersifat intelejen seperti sistem pakar, soft computing, sistem prediksi, data mining, dan sebagainya",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'profil_lulusan' => "Data Scientist",
                'deskripsi' => "Data Scientist adalah seseorang yang mampu mengolah data dengan metode ilmiah untuk menghasilkan informasi yang akurat dan bernilai tinggi sehingga dapat membantu pengambilan keputusan",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'profil_lulusan' => "Software Consultant",
                'deskripsi' => "Software Consultant adalah seseorang yang memberi jasa berupa konsultasi yang berkaitan dengan pengembangan perangkat lunak kepada klien",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'profil_lulusan' => "Educator and Researcher",
                'deskripsi' => "Lulusan Teknik Informatika dapat bekerja sebagai pendidik seperti guru, dosen, atau peneliti",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'profil_lulusan' => "Technopreneur",
                'deskripsi' => "Technopreneur adalah seseorang yang memiliki usaha di bidang teknologi",
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        ProfilLulusan::insert($lulusan);
    }
}
