<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;

    protected $table = 'menu'; // Pastikan sesuai dengan nama tabel Anda.

    public $timestamps =true;

    protected $fillable = [
        'nama',
        'harga',
        'deskripsi',
        'gambar',
    ];
}
