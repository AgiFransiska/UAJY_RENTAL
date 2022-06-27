<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pegawai;

class RegisterController extends Controller
{
    //
    public $nama_pegawai = '';
    public $email_pegawai = '';
    public $password_pegawai = '';

    protected $rules=[
        'nama_pegawai' => 'required',
        'email_pegawai' => 'required',
        'password_pegawai' => 'required',
    ];

    public function store(){
        $attributes = $this->validate();

        $pegawai = Pegawai::create($attributes);

        auth()->login($user);
        
        return redirect('/dashboard');
    }

    public function render()
    {
        return view('Login.auth.Register');
    }
}
