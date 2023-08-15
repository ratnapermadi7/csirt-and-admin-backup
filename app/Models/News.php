<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;

    protected $fillable =[
        'date',
        'judul_berita',
        'link_berita',
        'gambar_berita',
        'teks_berita'
    ];

}
