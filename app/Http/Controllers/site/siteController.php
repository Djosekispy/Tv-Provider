<?php

namespace App\Http\Controllers\site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Package;
use App\Models\Categories;
use Illuminate\Support\Facades\DB;

class siteController extends Controller
{

    public function index(){

        $packages = Package::all();

        return view('index',[
         'Packages' => $packages
        ]);
    }


    public function channels($id){

        $channels = DB::select("SELECT p.name as pacote, c.name as canal,c.price as preco,cat.name as categoria from packages as p
        inner join contract ct on ct.package = p.id
        inner join channels c on c.id = ct.channel
        inner join categories as cat on cat.id = c.category
        where ct.package = '$id' ");

        $total = DB::select("SELECT cat.name as canal, count(ct.channel) as total from packages as p
        inner join contract ct on ct.package = p.id
        inner join channels c on c.id = ct.channel
        inner join categories as cat on cat.id = c.category
        where ct.package = '$id'
        group by cat.name ");

        $canais = DB::select("select count(*) canais from contract where package = '$id'");

        $pacote = DB::select(" SELECT name as pacote,description as descricao, price as preco from packages where id = '$id' limit 1");

        return view('site.deteils',[
            'channel' => $channels,
            'total' => $total,
            'pacote' => $pacote,
            'canais' => $canais
        ]);
    }

    public function buy(Request $request){
      



    }
}
