<?php

namespace App\Models\Profil;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProfilLulusan extends Model
{
    use HasFactory;

    protected $fillable = [
        'profil_lulusan',
        'deskripsi'
    ];
}
