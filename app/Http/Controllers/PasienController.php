<?php

namespace App\Http\Controllers;
use App\Models\Pasien;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PasienController extends Controller
{
    //eeeeee
    public function masuk(){
        return view('/login');
    }
    public function regis(){
        return view('/register');
    }
    public function proses(Request $request){
        $request->validate([
            'Email'=>'required',
            'Katasandi'=>'required'
        ]);

        $ambildata=$request->only('Email','password');

        if(Auth::attempt($ambildata)){
            $request = redirect('/dashboard')->with('pesan','berhasil');
        }
        else{
            return back()->with('pesan','email atau password salah');
        }
    }
}
