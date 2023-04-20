<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;

class AppServiceProvider extends ServiceProvider
{
    
    public function register(): void
    {
        
    }

    public function boot(): void
    {
        if(Auth::user()){
             View::share('user_id', Auth::user()->id);
        }
     
    }
}
