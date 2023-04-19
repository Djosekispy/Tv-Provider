<?php

use Illuminate\Support\Facades\Route;
use App\Http\controllers\Acesso\AcessoController;
use App\Http\Controllers\Api\servicesController;
use App\Http\Controllers\site\siteController;


Route::get('/user', [AcessoController::class, 'all']);
Route::post('/registrar',[AcessoController::class, 'register']);
Route::post('/login',[AcessoController::class, 'authenticate']);
Route::get('/resend/{phone}', [AcessoController::class, 'resend']);

Route::get('/',[siteController::class, 'index'])->name('site.index');
Route::get('/api/services',[servicesController::class, 'index']);
Route::get('/api/user/{id}',[servicesController::class, 'user']);
Route::get('/channel/{id}',[siteController::class, 'channels']);



Route::get('/login', function(){
return view('auth.login');
});
Route::get('/register', function(){
    return view('auth.register');
    });








