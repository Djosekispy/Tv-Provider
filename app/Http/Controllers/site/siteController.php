<?php

namespace App\Http\Controllers\site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Package;
use App\Models\Categories;
use App\Models\Subscription;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\Channel;
class siteController extends Controller
{

    public function index(){

        $packages = Package::all();

        return view('index',[
         'Packages' => $packages
        ]);
    }
    public function history(){
$user_id = Auth::id();
        $packages = DB::select("SELECT * FROM  packages as pk INNER JOIN subscriptions as sub on sub.package = pk.id
            WHERE sub.user = '$user_id'
            ");
        return view('site.history',[
         'Packages' => $packages
        ]);
    }


    public function channels($id){
 $user_id = Auth::id();
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

        $pacote = DB::select(" SELECT name as pacote, id as identify,description as descricao, price as preco from packages where id = '$id' limit 1");

  $subscricaoActual = self::verifyCurrentSubsciption($id, $user_id);
    $subscricao = self::verifySubscription($user_id);

        return view('site.deteils',[
            'channel' => $channels,
            'total' => $total,
            'pacote' => $pacote,
            'canais' => $canais,
            'subscricaoActual' => $subscricaoActual,
            'subscricao' => $subscricao
        ]);
    }



public function channel(){
    $canais = Channel::all();

    return view('site.channels', compact('canais'));
}


public function verifySubscription($user_id) {
       $subscription = Subscription::where('user',$user_id)
        ->where('state','1')->get()->first();

       if($subscription){
        return false;
       }
       return true;
}

public function verifyCurrentSubsciption($id,$user_id){
 $subscription = Subscription::where('user',$user_id)
        ->where('state','1')
        ->where('package',$id)
        ->get()->first();

         if($subscription){
        return false;
       }
       return true;
}


    public function buy(Request $request){
        $user_id = Auth::id();
        $sub = new Subscription();
    $sub->user =  $user_id;
    $sub->package = $request->package;
    $sub->duration = 30;
    $sub->save();

    return back()->with('message','Plano Comprado com sucesso!');

    }

    public function cancel(Request $request){
         $user_id = Auth::id();
       $cancelar = DB::update("UPDATE subscriptions set state = '0' WHERE user = '$user_id' and package = '$request->package' ");
       return back()->with('message','Plano Cancelado!');
    }

   public function upgrade(Request $request){
    $user_id = Auth::id();
    $sub = new Subscription();

   $pacote = Subscription::where('user',$user_id)
        ->where('state','1')
        ->get()->first();
 $cancelar = DB::update("UPDATE subscriptions set state = '0' WHERE user = '$user_id' and package = '$pacote->package' ");

    $sub->user =  $user_id;
    $sub->package = $request->package;
    $sub->duration = 30;
    $sub->save();
return back()->with('message','Plano Actualizado com sucesso!');

   }

   public function createNewPlan(Request $request){
    $packages = new Package();
    $channel = new Channel();
    $packages->name = $request->name;
    $packages->description = $request->description;
    $packages->validate = $request->date;
    $packages->price = $request->price;
    $packages->save();

   foreach($request->channels as $cha){

   }


   }

}
