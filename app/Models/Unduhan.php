<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Unduhan extends Model
{
    use HasFactory;

    protected $fillable = [
        'judul',
        'deskripsi',
        'is_link',
        'path'
    ];
}
