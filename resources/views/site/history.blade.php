@extends('layouts.header')

@section('title','Histórico')

@section('content')


   <h2 class="text text-light bg-dark" style="padding:20px; margin-top:5px;">Meu Histórico</h2>

   <div class="row planSection">
    @foreach($Packages as $p => $pc)
    <div class="card">
  <img class="card-img-center" src="{{asset('img/007.jpg')}}" alt="Imagem de capa do card">
  <div class="card-body">
    <h5 class="card-title">{{$pc->name}}</h5>
    <p class="card-text">{{$pc->description}}.</p>
   @if($pc->state == 0)
    <div  class="btn btn-warning">Plano Terminado</div>
    @else
     <a href="/channel/{{$pc->id - 1}}" class="btn btn-primary">Plano Activo</a>
@endif
  </div>
</div>
@endforeach
   </div> 



@endsection