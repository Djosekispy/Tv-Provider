<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use  App\Http\Resources\servicesResourece;
use App\Models\packages;
use Illuminate\Support\Facades\DB;
use App\Models\Categories;
use App\Models\User;

class servicesController extends Controller
{
    

    public function index(){
         $services = packages::all();
         return servicesResourece::collection($services);
    }

    public function user($id){
    $users = DB::table('users')
                    ->where('id', $id)
                    ->get();

    if(empty($users)){
        return False;
    }
        return servicesResourece::collection($users);
    }



}
