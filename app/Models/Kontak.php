<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Kontak extends Model
{
    use HasFactory;
    protected $fillable = [
        'ig',
        'wa',
        'email',
        'alamat',
        'tahun',
    ];
}
