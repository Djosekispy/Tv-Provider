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
      <form action="/registrar" method="POST"  enctype="multipart/form-data" class="col s12">
        @csrf
        <div class="center">
          <h4>Seja Bem vindo(a) ao NetGenius</h4>
          <h5>Por Favor verifique seu número de Telefone</h5>
@if(isset($erro))
  <h6>{{$erro}}</h6>
@endif;
      </div>
<div class="input-field col s4">
    <input id="phone" type="text" class="inputs" name="phone" required placeholder="Telefone" style=" background-color: white;
    border: 2px solid ##9e9e9e;
    text-indent: 10px;
    border-radius: 10px;
    color: black;">
  </div>

  <div class="input-field col s12">
    <button type="submit" class="waves-effect waves-light btn">Confirmar</button>
  </div>

  <div class="input-field col s12">
    <link href="/resend/{{$phone}}" class="waves-effect waves-light btn">Renviar sms de confirmação</link>
  </div>
</form>
</div>
</div>
@endsection
