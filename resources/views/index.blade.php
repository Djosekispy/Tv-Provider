@extends('layouts.header')

@section('title','Home')

@section('content')



<div class="principal" id="primeiroLugar">

<a href="#" class="btn-large waves-effect waves-light  blue darken-4 pulse" id="plano">Adira já </a>
<div class="DizerPrincipal">
Tenha acesso aos melhores conteudos nacionais e internacionais,
com os melhores preços para toda a familia e desfrute de uma gama de canais com programas exclusivos.

</div>
</div>

<div class="principal" id="segundoLugar">
		<div id="texto" style="color: white;">
Compre o seu plano a qualquer lugar por meio da nossa API. Tenha sempre o seu plano em dia e aproveite o melhor.
</div>

<div id="Newletter">
<h4>Newsletter</h4>
<p>Fique a par com todas as nossas novidades! </p>
	<form action="#" method="POST" >
		@csrf
		<input type="email" name="email" placeholder="Escreva seu email">
		<button type="submit" name="enviar">Enviar</button>
	</form>
</div>

</div>


 <div class="row">
 	<div id="tituloPacote">Pacotes Disponiveis</div>

@foreach($Packages as $p)
    <div class="col l3 s3 ">
      <div class="card">
        <div class="card-image">
          <img src="{{asset('img/005.jpg')}}">
          <span class="card-title">{{$p['name']}}</span>
          <a class="btn-floating halfway-fab waves-effect waves-light red"><i class="material-icons">add</i></a>
        </div>
        <div class="card-content">
          <p>{{$p['description']}}. <a href="/channel/{{$p['id']}}">Ver mais</a></p>
        </div>
      </div>
    </div>
@endforeach






  </div>
@endsection
