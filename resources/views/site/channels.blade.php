@extends('layouts.header')

@section('title','Criando seu pacote')

@section('content')


<div class="row" style="margin:0;">
    <div class="col topo s12 blue lighten-5" style="padding: 10px 20px; ">
        <div class="col s3">Canais Adicionados : <span id="canal">0</span> </div>
        <div class =" col s43">Total a Pagar : <span id="kz">0</span> kwanzas </div>
        <div class="col s3 right"> <a  class="btn" style=" background-color: #87CEEB;
            color: black;
            font-weght:bold;
            text-transform: uppercase;">Contratar</a></div>
    </div>

</div>
    <div class="row  grey lighten-2" style="margin:0; padding: 0px 20px;background-color:">
       <table>
        @foreach ($canais as $canal)
        <tr class=" green lighten-3">
            <td>{{ $canal->name }} ({{$canal->price}})</td>
            <td id="{{$canal->id}}" onclick="adicionar({{$canal->id}},{{$canal->price}})"> 
                <span class="btn grey darken-4">Adicionar</span></td>
        </tr>
        @endforeach
       </table>
    </div>

<script>
function adicionar(id,preco){
  document.getElementById(id).innerHTML = " <span class='btn red'>Adicionado</span> ";
 
  let valor = document.getElementById('kz').innerText;
  let canal = document.getElementById('canal').innerText;

  document.getElementById('kz').innerText = parseFloat(valor) + preco;
  document.getElementById('canal').innerText = parseFloat(canal) + 1;
}
</script>
@endsection