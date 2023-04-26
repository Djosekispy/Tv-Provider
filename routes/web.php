<?php

use Illuminate\Support\Facades\Route;
use App\Http\controllers\Acesso\AcessoController;
use App\Http\Controllers\Api\servicesController;
use App\Http\Controllers\site\siteController;

//Rotas de Acesso
Route::get('/user', [AcessoController::class, 'all']);
Route::post('/registrar',[AcessoController::class, 'register']);
Route::post('/login',[AcessoController::class, 'authenticate'])->name('login');
Route::get('/resend/{phone}', [AcessoController::class, 'resend']);
Route::post('/confirm',[AcessoController::class, 'confirm'])->name('confirmando');
Route::post('/',[AcessoController::class, 'logout'])->name('my-logout');



//Rotas do site
Route::get('/',[siteController::class, 'index'])->name('site.index');
Route::post('/subscription/buy', [siteController::class, 'buy'])->middleware('auth');
Route::get('/channel/{id}',[siteController::class, 'channels']);
Route::get('/Channels', [siteController::class, 'channel'])->middleware('auth');;
Route::post('/cancel/plan',[siteController::class, 'cancel'])->middleware('auth');
Route::post('/upgrade/plan', [siteController::class, 'upgrade'])->middleware('auth');



//Rotas de API
Route::get('/api/services',[servicesController::class, 'index']);
Route::get('/api/user',[servicesController::class, 'user']);
Route::get('/api/subscription',[servicesController::class, 'subscription']);


//Rotas de views de acesso
Route::get('/login', function(){
return view('auth.login');
});
Route::get('/register', function(){
    return view('auth.register');
    });

Route::get('/api/document', function(){
    return view('site.document');
    });

Route::get('/teste',function(){
    return view('site.testes');
});





