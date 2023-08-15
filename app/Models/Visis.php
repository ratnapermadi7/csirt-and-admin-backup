<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Visis extends Model
{
    use HasFactory;

    protected $fillable =[
        'header',
        'judul_visi',
        'isi_visi',
        'judul_misi',
        'misi1',
        'misi2',
        'misi3',
        'misi4',
        'misi5'
    ];
}
