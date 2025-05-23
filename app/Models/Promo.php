<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Promo extends Model
{
    use HasFactory;

    public $timestamps =true;
    
    protected $fillable = [
        'judul',
        'deskripsi',
        'gambar',
    ];
}
