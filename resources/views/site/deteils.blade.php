@extends('layouts.header')

@section('title','Detalhes do Pacote')

@section('content')
<div class="row topo blue lighten-5" style="padding-top: 10px; padding-bottom:5px;">
    <div class="col s6 left" style="padding-left:20px;"> Pacote
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
      <a  class="btn  blue darken-4">
       @foreach ( $pacote as $p )
   Disponivel por apenas {{$p->preco}} kwanzas
@endforeach
    </a>
   
   
    @endforeach</div>
    <div class="col s3 right">
<form action="/subscription/buy" method="post">
    @csrf
    <button type="submit" class="btn">Contratar</button>
    <input name="package" value=" @foreach ( $pacote as $p )
    {{$p->identify}} 
 @endforeach" style="display: none;">

</form>
    </div>
</div>


<div>
    @if($mensagem = Session::get('message'))
  {{$messagem}}
    @endif;
</div>



<div class="row" style="padding: 0px 10px;">
    <div class="col s6">
        <h4 style="with:100%;">Seu Canais</h4>
        <table class="striped responsive-table">
            <tbody>
            
                @foreach ($channel as $ch )
                <tr>
                <td>{{$ch->canal}}</td>
                  </tr>
                @endforeach
            
            </tbody>
          </table>
            </div>
            <div class="col s6">
         <h4>Categorias Disponiveis</h4>
         <table class="striped responsive-table">
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
