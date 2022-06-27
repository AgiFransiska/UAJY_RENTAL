<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class driver extends Model
{
    use HasFactory;
    
    protected $table = "driver";
    protected $fillable = [
        'nama_driver',
        'alamat_driver',
        'tgl_lahir_driver',
        'jenis_kelamin_driver',
        'no_telp_driver',
        'email_driver',
        'password_driver',
        'status_tersedia_driver',
        'bahasa',
        'file_pdf',
    ];
}
