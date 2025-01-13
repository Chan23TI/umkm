<?php

namespace App\Models;

<<<<<<< HEAD
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
=======
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
>>>>>>> 56ba6fb (yola ok)

class Menu extends Model
{
    use HasFactory;

<<<<<<< HEAD
    protected $table = 'menu';

    public $timestamps = false;
=======
    protected $table = 'menu'; // Pastikan sesuai dengan nama tabel Anda.


>>>>>>> 56ba6fb (yola ok)

    protected $fillable = [
        'nama',
        'harga',
        'deskripsi',
        'gambar',
    ];
}
