@extends('layouts.header')

@section('title','Detalhes do Pacote')

@section('content')
<div class="row topo blue lighten-5" style="padding-top: 10px;">
    <div class="col s6 center"> Pacote
        @foreach ( $pacote as $p )
          <strong style="font-weight:bold;">  {{$p->pacote}}  </strong>
        @endforeach


        desfrute do melhor de  @foreach ( $canais as $c )
        <strong style="font-weight:bold;">    {{$c->canais}} </strong>
        Canais e mais!<br>
        @foreach ( $pacote as $p )
        <strong style="font-weight:lighter ;">   {{$p->descricao}}  </strong>
      @endforeach
       
    @endforeach</div>
    <div class="col s3 right">
<form action="#" method="post">
<button type="submit" name="comprar" class="btn"> @foreach ( $pacote as $p )
   Disponivel por apenas {{$p->preco}}kz
@endforeach</button>
</form>
    </div>
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
