<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EventMahasiswa extends Model
{
    use HasFactory;
 
    protected $fillable = [
        'judul',
        'slug',
        'tanggal',
        'poster',
        'content_html',
        'content_json'
    ];
}
