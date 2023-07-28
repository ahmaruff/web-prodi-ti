<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dosen extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
        'nidn',
        'email',
        'jabatan_struktural',
        'jabatan_akademik',
        'image',
        'homebase',
    ];
}
