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
            'password'=>'required'
        ]);

        $ambildata=$request->only('Email','password');

        if(Auth::attempt($ambildata)){
            $request = redirect('/dashboard')->with('pesan','berhasil');
        }
        else{
            return back()->with('pesan','email atau password salah');
        }
    }
    public function buat(Request $request){
        $request->validate([
            'NamaPasien'=>'required',
            'Email'=>'required|unique:email|email',
            'Notelfon'=>'required|string',
            'Alamat'=>'required|string',
            'password'=>'required|min:6',
            'Ulangi'=>'required|same:Katasandi'

        ]);
        return back()->with('pesan','akun dibuat');       
    }
}
