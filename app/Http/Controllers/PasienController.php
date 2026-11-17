<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Auth\Facades\Auth;

class PasienController extends Controller
{
    //
    public function masuk(){
        return view('/login');
    }
    public function proses(Request $request){
        $request->validate([
            'Email'=>'required',
            'Katasandi'=>'required'
        ]);

        $ambildata=$request->only('Email','Katasandi');
        if(Auth::attempt($ambildata)
        {
            tb_pasien::finds($ambildata)
            redirect('/dashboard')->with('pesan','berhasil')
        });
    }
}
