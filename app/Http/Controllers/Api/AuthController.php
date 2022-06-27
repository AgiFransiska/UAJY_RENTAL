<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Pegawai;
use App\Models\Role;
use App\Models\Customer;
use Illuminate\Support\Facades\DB;

use Validator; // import library untuk validasi

class AuthController extends Controller
{
    public function login(Request $request){

        $credentials = $request->only('email', 'password');

            $pegawai_role = DB::table('pegawai')
                    ->where('email',  $credentials['email'])
                    ->orWhere('password', $credentials['password'])
                    ->first();
                    
            
            if ($pegawai_role->id_role == 2) { // admin
                return redirect()->route('pegawai.index');
            }elseif($pegawai_role->id_role == 3){ // customer service
                return redirect()->route('transaksi.index');
            }elseif($pegawai_role->id_role == 1){ // manager
                return redirect()->route('promo.index');
            }
    }

    public function logout(Request $request)
    {
        Auth::logout();
 
        request()->session()->invalidate();
 
        request()->session()->regenerateToken();
 
        return redirect('/login');
    }
}