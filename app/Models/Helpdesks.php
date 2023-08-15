<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Helpdesks extends Model
{
    use HasFactory;

    protected $fillable =[
        'nama',
        'email',
        'kategori',
        'telepon',
        'judul',
        'laporan',
        'file_pendukung'
    ];

    // protected $guarded = [];
}
