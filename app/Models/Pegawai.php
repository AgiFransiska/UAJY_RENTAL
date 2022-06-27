<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Passport\HasApiTokens;
use Carbon\Carbon;

class Pegawai extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;
    
    protected $table = "pegawai";
    protected $fillable = [
        'id_role',
        'nama_pegawai',
        'alamat_pegawai',
        'tgl_lahir_pegawai',
        'jenis_kelamin_pegawai',
        'email',
        'no_telp_pegawai',
        'password',
        'foto_pegawai'
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    public function setPasswordAttribute($password)
    {
        $this->attributes['password'] = bcrypt($password);
    }

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function getCreatedAtAttribute() { 
        if (!is_null($this->attributes['created_at'])) {
            return Carbon::parse($this->attributes['created_at'])->format('Y-m-d H:i:s'); 
        } 
    } 
        
    public function getUpdatedAtAttribute() {
        if (!is_null($this->attributes['updated_at'])){
            return Carbon::parse($this->attributes['updated_at'])->format('Y-m-d H:i:s');
        }
    }
}
