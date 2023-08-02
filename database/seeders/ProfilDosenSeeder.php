<?php

namespace Database\Seeders;

use App\Models\Dosen;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProfilDosenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $rows =  array_map('str_getcsv', file(base_path('database/seeders/dosen_timi.csv')));
        $header = array_shift($rows);
        $csv_dosen = array();
        foreach ($rows as $row) {
            $csv_dosen[] = array_combine($header, $row);
        }
        

        Dosen::insert($csv_dosen);
    }
}
