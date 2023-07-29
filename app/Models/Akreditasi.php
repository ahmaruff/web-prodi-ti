<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Akreditasi extends Model
{
    use HasFactory;

    protected $fillable = [
        'prodi',
        'no_sk',
        'tahun_sk',
        'kadaluarsa',
        'masa_berlaku',
        'status_akreditasi',
        'dokumen_sk',
    ];
}
