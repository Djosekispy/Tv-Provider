@extends('layouts.header')

@section('title','Criando seu pacote')

@section('content')



    <div class="row" style="padding: 10px 20px;">
        <div class="col s12">
        <div class="col s6">Canais Adicionados <span>0</span> </div>
        <div class =" col s4">Total a Pagar <span>0</span> kwanzas </div>
    </div>

       <table>
        @foreach ($canais as $canal)
        <tr>
            <td>{{ $canal->name }}</td>
            <td id="{{$canal->id}}" onclick="adicionar({{$canal->id}},{{$canal->price}})"> 
                <span class="btn">Adicionar</span></td>
        </tr>
        @endforeach
       </table>
    </div>

<script>
function adicionar(id,preco){
  document.getElementById(id).innerHTML = " <span class='btn red'>Adicionado</span> ";
}
</script>
@endsection