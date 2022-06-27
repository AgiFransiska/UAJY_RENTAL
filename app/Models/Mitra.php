<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mitra extends Model
{
    use HasFactory;

    protected $table = "mitra";
    protected $fillable = [
        'no_ktp',
        'nama_mitra',
        'alamat_mitra',
        'no_telp_mitra',
        'mulai_kontrak',
        'akhir_kontrak'
    ];
}
