<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InfoAkademik extends Model
{
    use HasFactory;

    protected $fillable = [
        'judul',
        'slug',
        'dokumen',
        'content_html',
        'content_json'
    ];
}
