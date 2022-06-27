<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    use HasFactory;
    protected $table = 'transaksi';
    protected $fillable = [
        'id_customer',
        'id_pegawai',
        'id_aset',
        'id_driver',
        'no_ktp',
        'no_sim',
        'tanggal_transaksi',
        'tanggal_mulai_sewa',
        'tanggal_akhir_sewa',
        'metode_pembayaran',
        'ekstensi_biaya',
        'total_biaya_sewa',
        'status_transaksi',
        'status_verifikasi',
        'rating_driver',
        'kode_promo',
        'jenis_transaksi'
    ];
}
