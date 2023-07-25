<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Artikel extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'author',
        'image',
        'category',
        'content_html',
        'content_json',
        'is_published',
        'published_at'
    ];
}
