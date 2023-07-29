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
        'tgl_terbit',
        'tgl_kadaluarsa',
        'peringkat',
        'status',
        'dokumen_sk',
    ];
}
