<?php

use App\Http\Controllers\PasienController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('login');
});

route::get('/login',[PasienController::class,'masuk']);
route::post('/login',[PasienController::class,'proses']);
route::get('/register',[PasienController::class,'regis']);
route::post('/register',[PasienController::class,'buat']);
