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

<div style="background-color: #fafafa; margin:0 auto;">


    <div class="row" style="margin:0px auto; max-width:900px;">
        <form method="POST" action="/login" enctype="multipart/form-data" class="col s12 center">
            @csrf
<div class="input-field col s9">
    <h4>Seja Bem Vindo a NetGenius</h4>
</div>
@if(isset($email))
<div class="red lighten-2 col s9" style="text-align:center; font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif; font-weight:bolder; margin-bottom:5px;">
 {{$email}}
</div>
@endif
<div class="input-field col s9">
    <input type="email"  name="email" required placeholder="Email" style=" background-color: white;
    border: 2px solid ##9e9e9e;
    text-indent: 10px;
    border-radius: 10px;
    color: black;">
  </div>

  <div class="input-field col s9">
    <input id="password" type="password" name="password" required placeholder="Password" style=" background-color: white;
    border: 2px solid ##9e9e9e;
    text-indent: 10px;
    border-radius: 10px;
    color: black;">

  </div>

            <div class="input-field col s12">
                <label>
                        <input type="checkbox" />
                        <span>Recordar senha</span>

                </label>
            </div>

            <div class="input-field col s9">

                    <a class="link" href="{{ route('password.request') }}">
                        {{ __('Esqueceu sua senha?') }}
                    </a>
                    <a class="link" href="#">
                        {{ __('Criar Conta') }}
                    </a>
            </div>
            <div class="input-field col s9">
                <button type="submit" class="waves-effect waves-light btn-large">Entrar</button>
              </div>
        </form>
    </div>
</div>

@endsection
