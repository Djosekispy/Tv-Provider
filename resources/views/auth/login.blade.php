@extends('layouts.header')

@section('title','Login')

<style>
    input::placeholder{
       color:#424242;

        font-family: Arial, Helvetica, sans-serif;
        font-style: italic;

    }

        </style>
@section('content')
<div class="bg-lighter row" style="max-width:900px; margin: 0 auto; padding: 80px; color:white;"> 

<div class="col-sm-12 col-md-6 col-lg-6">
    <h2>Seja Bem Vindo a NetGenius</h2>
    <h5>Faça já seu Login</h5>

@if(isset($email))
<div class="alert alert-danger" style="text-align:center; font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif; font-weight:bolder; margin-bottom:5px;">
 {{$email}}
</div>
@endif
</div>

<form method="POST" action="/login" enctype="multipart/form-data" >
            @csrf
  <div class="form-group">
    <label for="exampleInputEmail1">Endereço de email</label>
    <input type="email" class="form-control"  name="email" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Seu email">
    <small id="emailHelp" class="form-text text-muted">Nunca vamos compartilhar seu email, com ninguém.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Senha</label>
    <input type="password" class="form-control"  name="password" id="password" placeholder="Senha">
  </div>
  <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Recordar Senha</label>
  </div>

<div class="form-group">
    <a href="/registrar" style="margin-right:10px;">Esqueceu sua Senha?</a>
  <a href="/registrar">Criar Conta</a>
</div>

  <button type="submit" class="btn btn-primary">Enviar</button>
</form>

</div>
@endsection