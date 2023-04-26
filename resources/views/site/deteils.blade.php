@extends('layouts.header')

@section('title','Detalhes do Pacote')

@section('content')

<div class="alert alert-info row ppaymentSection" role="alert">
     <div class="col-sm-12 col-md-6 col-lg-6">
       Pacote
        @foreach ( $pacote as $p )
          <strong style="font-weight:bold;">  {{$p->pacote}}  </strong>
        @endforeach


        desfrute do melhor de  @foreach ( $canais as $c )
        <strong style="font-weight:bold;">    {{$c->canais}} </strong>
        Canais e mais!<br>
        @foreach ( $pacote as $p )
        <strong style="font-weight:lighter ;">   {{$p->descricao}}  </strong>
      @endforeach
      <br>
      <a  class="text text-success">
       @foreach ( $pacote as $p )
   Disponivel por apenas {{$p->preco}} kwanzas
@endforeach
    </a>
   
   
    @endforeach
     </div>
      
    <div class="col-sm-12 col-md-6 col-lg-6">
        @if($subscricaoActual)
        @if($subscricao)
 <form action="/subscription/buy" method="post">
    @csrf
    <button type="submit" class="btn btn-primary" role="button">Contratar</button>
    <input name="package" value=" @foreach ( $pacote as $p )
    {{$p->identify}} 
 @endforeach" style="display: none;">

</form>
@else
 <form action="/upgrade/plan" method="post">
    @csrf
    <button type="submit" class="btn btn-primary" role="button">Actualizar Plano</button>
    <input name="package" value=" @foreach ( $pacote as $p )
    {{$p->identify}} 
 @endforeach" style="display: none;">

</form>

@endif
@else
<form action="/cancel/plan" method="post">
    @csrf
    <input name="package" value=" @foreach ( $pacote as $p )
    {{$p->identify}} 
 @endforeach" style="display: none;">

    <button type="submit" class="btn btn-danger" role="button">Cancelar Subscrição</button>
    
@endif

</div> 

</div>



<div class="addSection row alert text-light  " role="alert" >

    <div class="col-sm-12 col-md-6 col-lg-6">
        <h4 class="alert alert-success">Seus Canais</h4>
            <table class="table table-hover">
  <tbody>
                @foreach ($channel as $ch )
                <tr>
                <td>{{$ch->canal}}</td>
                  </tr>
                @endforeach
  </tbody>
</table>
    </div>

    <div class="col-sm-12 col-md-6 col-lg-6">
         <h4 class="alert alert-success">Categorias do Pacote</h4>
            <table class="table table-hover">
  <tbody>
   
                @foreach ($total as $t )
                <tr>
                <td>{{$t->canal}}</td>
                <td>{{$t->total}}</td>
                  </tr>
                @endforeach
  </tbody>
</table>
    </div>


</div>




@endsection
