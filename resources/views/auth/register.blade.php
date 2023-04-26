@extends('layouts.header')

<style>
input::placeholder{
   color:#424242;
  
    font-family: Arial, Helvetica, sans-serif;
    font-style: italic;
   
}

    </style>
@section('content')


 <div class="bg-lighter row" style="margin: 0 auto; padding: 40px 10px; color:white;"> 
     <div class="center col-sm-12 col-md-3 col-lg-3">
        <h4>Faça seu cadastro no NetGenius</h4>
      
    </div>

    <form action="/registrar" method="POST"  enctype="multipart/form-data" class="col-sm-12 col-md-9 col-lg-9">
      @csrf
 <div class="bg-lighter row"> 
     
        <div class="form-group col-sm-12 col-md-12 col-lg-12">
           <label for="exampleInputPassword1">Nome</label>
          <input  id="name" type="text" class="form-control" name="name" required placeholder="Nome">
        </div>
    
    
        <div class="form-group col-sm-12 col-md-6 col-lg-6">
           <label for="exampleInputPassword1">Endereço</label>
          <input id="address" type="text" class="form-control" name="address" required placeholder="Address">
        </div>
    
      
        <div class="form-group col-sm-12 col-md-6 col-lg-6">
           <label for="exampleInputPassword1">Número de Bilhente de Identidate</label>
          <input id="bi" type="text" class="form-control" name="bi" required placeholder="Bilhete de Identidade">
        </div>
      
        <div class="form-group col-sm-12 col-md-6 col-lg-6">
           <label for="exampleInputPassword1">Email</label>
          <input type="email" class="form-control" name="email" required placeholder="Email">
        
        </div>
    
        <div class="form-group col-sm-12 col-md-6 col-lg-6">
           <label for="exampleInputPassword1">Telefone</label>
          <input id="phone" type="text" class="form-control" name="phone" required placeholder="Telefone">
         
        </div>

        <div class="form-group col-sm-12 col-md-6 col-lg-6">
             <label for="exampleInputPassword1">Data de Nacimento</label>
          <input id="nascimento" type="date"  class="form-control" name="born_at" required>
          
        </div>
   
  <div class="form-group col-sm-12 col-md-6 col-lg-6">
    <label for="exampleInputPassword1">Senha</label>
    <input type="password" class="form-control"  name="password" id="password" placeholder="Senha">
  </div>


        <div class="form-group col-sm-12 col-md-12 col-lg-12">
          <button type="submit" class="btn btn-primary">Registar</button>
        </div>
      

      </div>
    </form>
  </div>
</div>
@endsection
