@extends('layouts.header')

@section('title','Home')
<style>
    .carousel-item {
  height: 1000hv;
  width:100%;
}

.carousel-item > img {
 height: 100%;
  width: 100%;
}


</style>
@section('content')


<div class="principal" id="primeiroLugar">

<a href="#" class="btn-large waves-effect waves-light  blue darken-4 pulse" id="plano">Adira já </a>
<div class="DizerPrincipal">
Tenha acesso aos melhores conteudos nacionais e internacionais,
com os melhores preços para toda a familia e desfrute de uma gama de canais com programas exclusivos.

</div>
</div>

  
      <div class="carousel" style="width:100%;height:100hv;">
        <div class="carousel-item" style="width:100%;height:100%;">
            <img src="https://wl-incrivel.cf.tsp.li/resize/1200x630/jpg/683/952/6c8eb05c83b3d17573e0b3a011.jpg" style="width:100%;height:100%;">
        </div>
        <div class="carousel-item" style="width:100%;height:100%;">
            <img src="https://blogger.googleusercontent.com/img/a/AVvXsEi6ipSweYg95JkYf95V54orsZ0zviwriTmD2lASlGs-gL60tOPC-5jp6wR07Y11fTQLebtxjsttog8sz4i9T50O8oyVZP7ybFfY7S4cYXAOoTULsFKNLlwdrKk2gSrX9ZGGEnYN6n987XJbV8M33naqQ5EFZq2K-TaTMRXDC-Ll8XdCQ4KNtrq4QBk6gg=w640-h360">
        </div>
        <div class="carousel-item" style="width:100%;height:100%;">
            <img src="https://angorussia.com/wp-content/uploads/2019/06/zap-viva-estrelas-patricia-daniel-e-stela.png" style="width:100%;height:100%;">
        </div>
        <div class="carousel-item" style="width:100%;height:100%;">
            <img src="https://www.bloomberglinea.com/resizer/kjL95EnR9P2ZWvHLs6HviQVkn54=/1440x0/filters:format(jpg):quality(70)/cloudfront-us-east-1.images.arcpublishing.com/bloomberglinea/G7CW5BBI4NGRBD74UPHLNY66HE.jpg" style="width:100%;height:100%;">
        </div>
        <div class="carousel-item" style="width:100%;height:100%;">
            <img src="https://labdicasjornalismo.com/images/ck/images/img5e9902b0b20a48_48243086.jpg" style="width:100%;height:100%;">
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

  <script>
    const carouselItems = document.querySelectorAll('.carousel-item');
    const intervalTime = 5000; // tempo de transição entre as imagens em milissegundos
    let currentIndex = 0;
    
    function showNextItem() {
      carouselItems[currentIndex].classList.remove('active');
      currentIndex = (currentIndex + 1) % carouselItems.length;
      carouselItems[currentIndex].classList.add('active');
    }
    
    // inicia a transição automática
    let interval = setInterval(showNextItem, intervalTime);
    
    // pausa a transição automática quando o mouse estiver sobre o carousel
    const carousel = document.querySelector('.carousel');
    carousel.addEventListener('mouseenter', () => {
      clearInterval(interval);
    });
    
    // retoma a transição automática quando o mouse sair do carousel
    carousel.addEventListener('mouseleave', () => {
      interval = setInterval(showNextItem, intervalTime);
    });
    
    </script>
@endsection
