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
        <h4>Faça seu cadastro no NetGenius</h4>
      
    </div>
     
        <div class="input-field col s6">
          <input  id="name" type="text" class="inputs" name="name" required placeholder="Nome" style=" background-color: white;
          border: 2px solid ##9e9e9e;
          text-indent: 10px;
          border-radius: 10px;
          color: black; width:100%;">
        </div>
    
    
        <div class="input-field col s6">
          <input id="address" type="text" class="inputs" name="address" required placeholder="Address" style=" background-color: white;
          border: 2px solid  ##9e9e9e;
          text-indent: 10px;
          border-radius: 10px;
          color: black;">
        </div>
    
      
        <div class="input-field col s6">
          <input id="bi" type="text" class="inputs" name="bi" required placeholder="Bilhete de Identidade" style=" background-color: white;
          border: 2px solid  ##9e9e9e;
          text-indent: 10px;
          border-radius: 10px;
          color: black;">
        </div>
      
        <div class="input-field col s6">
          
          <input type="email" class="inputs" name="email" required placeholder="Email" style=" background-color: white;
          border: 2px solid ##9e9e9e;
          text-indent: 10px;
          border-radius: 10px;
          color: black;">
        
        </div>
    
        <div class="input-field col s6">
          <input id="phone" type="text" class="inputs" name="phone" required placeholder="Telefone" style=" background-color: white;
          border: 2px solid ##9e9e9e;
          text-indent: 10px;
          border-radius: 10px;
          color: black;">
         
        </div>

        <div class="input-field col s6">
            
          <input id="nascimento" type="date" class="validate" name="born_at" required style=" background-color: white;
          border: 2px solid ##9e9e9e;
          text-indent: 10px;
          border-radius: 10px;
          color: black;">
          
        </div>
        <div class="input-field col s6">
          <input id="password" type="password" name="password" required placeholder="Password" style=" background-color: white;
          border: 2px solid ##9e9e9e;
          text-indent: 10px;
          border-radius: 10px;
          color: black;">
         
        </div>
   
        <div class="input-field col s12">
          <button type="submit" class="waves-effect waves-light btn-large">Registar</button>
        </div>
      
    </form>
  </div>
</div>
@endsection
