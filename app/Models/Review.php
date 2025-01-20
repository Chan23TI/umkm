<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Review extends Model
{
    use HasFactory;

    protected $table = 'review'; //tabel review

    public $timestamps =false;

    protected $fillable=[
        'nama',
        'review',
    ];

}
