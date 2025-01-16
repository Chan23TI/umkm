<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Kontak extends Model
{
    use HasFactory;

   // protected $table = 'menu'; // Pastikan sesuai dengan nama tabel Anda.



    protected $fillable = [
        'ig',
        'wa',
        'email',

    ];
}
