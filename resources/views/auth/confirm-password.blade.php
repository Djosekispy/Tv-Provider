@extends('layouts.header')

<style>
input::placeholder{
   color:#424242;

    font-family: Arial, Helvetica, sans-serif;
    font-style: italic;

}

    </style>
@section('content')

<div style="background-color: #fafafa; margin:0;">

    <div class="row" style="margin:0;">
        <div class="center">
            <h4>Seja Bem vindo(a) ao NetGenius</h4>
            <h6>Por favor verifique seu número de Telefone</h6>
  @if(isset($erro))
    <h6>{{$erro}}</h6>
  @endif;
        </div>
      <form action="{{route('confirmando')}}" method="post"  class="col s12">
        @csrf
<div class="input-field col s4">
    <input id="phone" type="text" class="inputs" name="cod" required placeholder="Codigo de Verificação" style=" background-color: white;
    border: 2px solid ##9e9e9e;
    text-indent: 10px;
    border-radius: 10px;
    color: black;">
     <input type="text" name="user_id" value={{$user_id}} style="display:none">
     <input type="text" name="phone" value="{{$phone}}" style="display:none">
  </div>


  <div class="input-field col s12">
    <button type="submit" name="send" class="waves-effect waves-light btn">Confirmar</button>
  </div>
</form>

<div class="input-field col s12">
    <a href="/resend/{{$phone}}/{{$user_id}}" class="waves-effect waves-light">Renviar sms de confirmação</a>
  </div>
</div>
</div>
@endsection
