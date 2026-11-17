<?php

use App\Http\Controllers\PasienController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('dashboard');
});

route::get('/login',[PasienController::class,'masuk']);
route::post('/login',[PasienController::class,'proses']);
