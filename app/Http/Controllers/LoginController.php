<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pegawai;

class LoginController extends Controller
{
    //
    public function render()
    {
        return view('Login.auth.Loginuser');
    }

    public function mount()
    {
        $this->fill(['email_pegawai' => 'manager@gmail.com', 'password_pegawai' => 'secret']);
    }

    public function store()
    {
        $attributes = $this->validate();

        if (! auth()->attempt($attributes)) {
            throw ValidationException::withMessages([
                'email_pegawai' => 'Your provided credentials could not be verified.'
            ]);
        }

        session()->regenerate();

        return redirect('Dashboard.dashboard');
    }
}
