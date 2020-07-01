<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pilihan extends Model
{
    protected $fillable = [
        'namaKopi', 'gambar', 'deskripsi', 'harga',
    ];
}
