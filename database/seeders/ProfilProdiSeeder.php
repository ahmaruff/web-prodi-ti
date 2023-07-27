<?php

namespace Database\Seeders;

use App\Models\Profil\Misi;
use App\Models\Profil\Tujuan;
use App\Models\Profil\Visi;
use Illuminate\Database\Seeder;

class ProfilProdiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Visi::create([
            'visi' => "Menjadi program studi Teknik Informatika yang unggul dalam bidang rekayasa perangkat lunak dan sistem cerdas yang Qur'ani di tingkat nasional pada tahun 2031"
        ]);

        $misi = [
            [ 'misi' => "Menyelenggarakan pendidikan Strata Satu di bidang rekayasa perangkat lunak dan sistem cerdas, dengan menanamkan nilai-nilai Al-Qur'an", 'created_at' => now(), 'updated_at' => now() ],
            [ 'misi' => "Menyelenggarakan penelitian yang bersifat inovatif dan kontributif terhadap pengembangan ilmu pengetahuan dan teknologi di bidang rekayasa perangkat lunak dan sistem cerdas", 'created_at' => now(), 'updated_at' => now() ],
            [ 'misi' => "Melaksanakan pengabdian kepada masyarakat melalui pendampingan, pengembangan, dan penyebaran produk teknologi informasi untuk meningkatkan kesejahteraan hidup berasaskan Qur'ani", 'created_at' => now(), 'updated_at' => now() ],
            [ 'misi' => "Membangun dan mengembangkan hubungan kerjasama dengan semua pemangku kepentingan", 'created_at' => now(), 'updated_at' => now() ],
        ];

        Misi::insert($misi);

        $tujuan = [
            [ 'tujuan' => "Menghasilkan sarjana komputer yang mampu melakukan analisis, perencanaan pengembangan, pengujian,  pengawasan perangkat lunak dan penerapan sistem cerdas dengan tetap menjunjung tinggi nilai-nilai Al-Qur'an", 'created_at' => now(), 'updated_at' => now()],
            [ 'tujuan' => "Memberikan kontribusi dalam pengembangan teknologi informasi bidang perangkat lunak dan sistem cerdas dalam bentuk produk hasil penelitian yang inovatif", 'created_at' => now(), 'updated_at' => now()],
            [ 'tujuan' => "Menghasilkan perangkat lunak dan sistem cerdas terapan sebagai solusi permasalahan untuk meningkatkan kualitas hidup masyarakat berasaskan Qur'ani", 'created_at' => now(), 'updated_at' => now()],
            [ 'tujuan' => "Meningkatkan kualitas dan efektivitas kerjasama dengan seluruh pemangku kepentingan yang mendukung pengembangan teknologi informasi", 'created_at' => now(), 'updated_at' => now()],
        ];

        Tujuan::insert($tujuan);
    }
}
