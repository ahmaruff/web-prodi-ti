<?php

namespace Database\Seeders;

use App\Models\ProgramKerja;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class HimtiProkerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'judul' => "Pesta Ceria Informatika",
                'deskripsi' => "Kegiatan pengenalan kampus bagi mahasiswa baru yang disusun secara menarik, tanpa perpeloncoan dan dibuat menyesuaikan kebutuhan mahasiswa baru",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'judul' => "Dies Natalis Teknik Informatika",
                'deskripsi' => "Kegiatan mahasiswa untuk merayakan hari jadi prodi Teknik Infromatika UNSIQ. Dalam acara ini terdapat berbagai kegiatan menarik yang mengasah keterampilan dan kreativitas mahasiswa",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'judul' => "Seminar Kerja Praktek",
                'deskripsi' => "Kegiatan seminar bagi mahasiswa yang mengambil mata kuliah Kerja Praktek (KP). Seminar ini menjadi syarat untuk memperoleh nilai mata kuliah KP",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'judul' => "Pembuatan Pakaian Dinas Harian (PDH)",
                'deskripsi' => "Kegiatan pembuatan PDH bagi pengurus dan anggota HIMTI sebagai wujud identitas mahasiswa Teknik Informatika UNSIQ. Pembuatan PDH ini juga sebagai kegiatan dana usaha HIMTI",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'judul' => "Ziarah dan Bakti Sosial",
                'deskripsi' => "Kegiatan ini sebagai wujud pengamalan kita sebagai mahasiswa UNSIQ yang berbasis pesantren, serta wujud pengabdian masyarakat",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'judul' => "Himtipedia" ,
                'deskripsi' => "Kegiatan pembuatan konten edukatif pada platform Instagram. Melalui kegiatan ini diharapkan mampu menambah khasanah pengetahuan mahasiswa",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'judul' => "HimtiNews",
                'deskripsi' => "HimtiNews merupakan kegiatan yang berisi penyampaian informasi penting secara cepat mengenai perkuliahan di lingkup Teknik Informatika,",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'judul' => "Ngaji Koding (NganKod)",
                'deskripsi' => "Kegiatan pelatihan pemrograman bagi anggota, sebagai wujud komitmen dan usaha HIMTI untuk membantu kegiatan akademis mahasiswa",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'judul' => "Ngobrol Bareng (Ngobar)",
                'deskripsi' => "Kegiatan berupa talkshow untuk sosialisasi atau pengenalan mengenai perkuliahan dan berbagi pengalaman seputar dunia IT yang melibatkan mahasiswa Teknik Informatika",
                'created_at' => now(),
                'updated_at' => now(),
            ],[
                'judul' => "Compe-TI-tion",
                'deskripsi' => "CompeTItion Merupakan ajang perlombaan baik perlombaan yang mengarah ke akademik maupun non akademik sebagai salah satu sarana pengembangan minat dan bakat mahasiswa",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'judul' => "Serap Aspirasi",
                'deskripsi' => "Usaha pengumpulan aspirasi, kritik, dan saran terhadap oganisasi HIMTI. Sehingga HIMTI dapat terus berkembang menjadi lebih baik lagi",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'judul' => "Safari Kampus & HIMTI Guest Host",
                'deskripsi' => "Dengan aktifnya HIMTI dalam PERMIKOMNAS (Perhimpunan Mahasiswa Informatika dan Komputer Nasional) Menjadikan HIMTI sering berkunjung dan dikunjungi oleh Himpunan dari kampus lain",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'judul' => "Studi Banding",
                'deskripsi' => "Kegiatan sarana saling berbagi informasi dengan lembaga lain. Program ini bertujuan untuk menambah wawasan untuk memajukan himti supaya lebih baik lagi",
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        ProgramKerja::insert($data);
    }
}
