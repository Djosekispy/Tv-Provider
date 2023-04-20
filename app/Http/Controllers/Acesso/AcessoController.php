<?php

namespace App\Http\Controllers\Acesso;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\RegisterRequest;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use Illuminate\Support\Str;
use Carbon\Carbon;
use Illuminate\Http\RedirectResponse;
use Twilio\Rest\Client;

class AcessoController extends Controller
{
    public function authenticate(Request $request)
    {

        $email = $request->email;
        $user = User::where('email',$email)->get()->first();

       if(empty($user)){
            return view('auth.login',[
                'email' => "Os dados inseridos não conferem, verifique e tente novamente!"
            ]);

    }else{
       $verificado = DB::select("SELECT * from users where email = '$email' and phone_verified_at is not NULL ");
       if(!$verificado){
        self::verifyAccount($user);
       }

    }

       Auth::login($user, $remember = true);
        return redirect('/');


    }


    public function register(RegisterRequest $request)
{
            $user = new User();
            $data = $request->validated();
            $data['password'] = bcrypt($request->password);
            $codigos =  self::codigos();
            $user->name =  $data['name'];
            $user->address = $data['address'];
            $user->password = $data['password'];
            $user->email = $data['email'];
            $user->phone = $data['phone'];
            $user->bi = $data['bi'];
            $user->born_at = Carbon::make($request->born_at)->format('Y-m-d');
            $user->two_factor_secret = $codigos['cod1'];
            $user->two_factor_recovery_codes = $codigos['cod2'];

            $user->save();

        self::verifyAccount($user);
}

public function codigos(): array
{
    $randomCode1 = Str::random(random_int(4, 6));
    $randomCode2 = Str::random(random_int(4, 6));
 $cod = [
    'cod1' => $randomCode1,
    'cod2' => $randomCode2,
   ];
   return $cod;


}

public function all(){
    $user = User::all();

    return $user;
}

public function verifyAccount($data){
    $sid = getenv("TWILIO_ACCOUNT_SID");
    $token = getenv("TWILIO_AUTH_TOKEN");
    $number = getenv("TWILIO_NUMBER");

    $twilio = new Client( $sid, $token);
    $phone = $data->phone;

                      $twilio->messages
                          ->create( '+244'.$phone,
                                   array(
                                       "messagingServiceSid" => "MG73483e8585a7087c0f6328edfb403207",
                                       'from' => $number,
                                       "body" => "Seu Codigo de Verificação NetGenius: ".$data->two_factor_secret,

                                   )
                          );
                           return view('auth.confirm-password',['phone' => $phone ]);
}


public function resend($phone): RedirectResponse
{
    $user = User::where('phone',$phone)->get()->first();
    if(empty($user)){

        return back();
    }
    self::verifyAccount($user);
}

}
