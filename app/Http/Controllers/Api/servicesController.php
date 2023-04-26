<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Resources\servicesResource;
use App\Models\Package;
use Illuminate\Support\Facades\DB;
use App\Models\Categories;
use App\Models\User;

class servicesController extends Controller
{
    

    public function index(){
         $services = Package::all();
         return servicesResource::collection($services);
    }

    public function user(Request $request){
    $data = $request->all();
    $users = User::where('bi', $data['bi'])->get()->first();
  if(empty($users)){
        return   [
            "message" => "Codigo inválido",
        ];
  }

  return [
    "id" => $users->id,
    "Nome" => $users->name,
    "Codigo" => $users->bi,
  ];

    }

public function subscription(Request $request){
   $cod = $request->cod;
   $package = $request->package;

   return $request;

}



}
