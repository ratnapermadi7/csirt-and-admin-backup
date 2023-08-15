<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rfcs extends Model
{

    protected $fillable = [

        'rfc_indo',
        'rfc_english'
    ];
    use HasFactory;
}
