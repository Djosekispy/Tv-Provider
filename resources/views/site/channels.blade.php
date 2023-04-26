@extends('layouts.header')

@section('title','Criando seu pacote')

@section('content')


<div class="alert alert-info row ppaymentSection" role="alert">
     <div class="col-sm-6 col-md-4 col-lg-4">Canais Adicionados: <span id="canal">0</span></div>
     <div class="col-sm-6 col-md-4 col-lg-4">Total a Pagar: <span id="kz">0</span>  Kwanzas</div>
      
    <div class="col-sm-12 col-md-4 col-lg-4"><a class="btn btn-primary" href="#" role="button">Contratar</a></div>
 
</div> 


<div class="addSection" role="alert">
    <table class="table table-hover">
  <tbody>
 @foreach ($canais as $canal)
    <tr>
      <td>{{ $canal->name }} ({{$canal->price}})</td>
      <td id="{{$canal->id}}" onclick="adicionar({{$canal->id}},{{$canal->price}})">
        <a class="btn btn-info" role="button">Adicionar</a></td>
    </tr>
     @endforeach
  
   
  </tbody>
</table>
</div>

<script>
function adicionar(id,preco){
  document.getElementById(id).innerHTML = " <a class='btn btn-warning' role='button'>Adicionado</a> ";
 
  let valor = document.getElementById('kz').innerText;
  let canal = document.getElementById('canal').innerText;

  document.getElementById('kz').innerText = parseFloat(valor) + preco;
  document.getElementById('canal').innerText = parseFloat(canal) + 1;
}
</script>
@endsection