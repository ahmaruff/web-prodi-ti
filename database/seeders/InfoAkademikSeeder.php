<?php

namespace Database\Seeders;

use App\Models\InfoAkademik;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class InfoAkademikSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'id' => 1,
                'judul' => 'Kurikulum',
                'slug' => Str::slug('Kurikulum'),
                'content_html' => '<p>Halo Dunia</p>',
                'content_json' => '{"type":"doc","content":[{"type":"paragraph","content":[{"type":"text","text":"Halo Dunia"}]}]}',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 2,
                'judul' => 'Tugas Akhir',
                'slug' => Str::slug('Tugas Akhir'),
                'content_html' => '<p>Halo Dunia</p>',
                'content_json' => '{"type":"doc","content":[{"type":"paragraph","content":[{"type":"text","text":"Halo Dunia"}]}]}',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 3,
                'judul' => 'Kerja Praktek',
                'slug' => Str::slug('Kerja Praktek'),
                'content_html' => '<p>Halo Dunia</p>',
                'content_json' => '{"type":"doc","content":[{"type":"paragraph","content":[{"type":"text","text":"Halo Dunia"}]}]}',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 4,
                'judul' => 'MBKM Kampus Merdeka',
                'slug' => Str::slug('MBKM Kampus Merdeka'),
                'content_html' => '<p>Halo Dunia</p>',
                'content_json' => '{"type":"doc","content":[{"type":"paragraph","content":[{"type":"text","text":"Halo Dunia"}]}]}',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 5,
                'judul' => 'Kalender Akademik',
                'slug' => Str::slug('Kalender Akademik'),
                'content_html' => '<p>Halo Dunia</p>',
                'content_json' => '{"type":"doc","content":[{"type":"paragraph","content":[{"type":"text","text":"Halo Dunia"}]}]}',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];



        DB::table('info_akademiks')->upsert($data,['id'],['judul','slug','content_html','content_json']);
    }
}
