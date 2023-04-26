
@extends('layouts.header')

@section('title','Home')

@section('content')

<div id="carouselExampleFade"  class="carousel slide carousel-fade" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
           <img  src="{{asset('fotos/globo.png')}}" alt="Primeiro Slide">
        <div class="carousel-caption d-none d-md-block">
    <p>Desfrute dos melhores programas e com os melhores pacotes e nos melhores preços!</p>
  </div> 
    </div>
    
       <div class="carousel-item ">
           <img  src="{{asset('fotos/globo.png')}}" alt="Segundo Slide">
        <div class="carousel-caption d-none d-md-block">
    <p>Assista ao melhor do Ano com A Globo F acesse já globo-f.blogspot.com!</p>
  </div> 
    </div>

   <div class="carousel-item">
           <img  src="{{asset('fotos/globo.png')}}" alt="terceiro Slide">
        <div class="carousel-caption d-none d-md-block">
    <p>Tenha Acesso as todas as mais recentes novidades!</p>
  </div> 
    </div>
  </div>


  <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Anterior</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Próximo</span>
  </a>
</div>

<div class="firstSecction">
<div>
    Damos a si o melhor que procura, com os melhores canais e pacotes terás nas mão o mundo a um estalar dos dedos.
    Aprecie, escute, se divirta e junta-se a nós neste jornada.
</div>
<a class="btn btn-primary" href="#" role="button">Adira já</a>
</div>


<div class="secondSection row">
<div class="col-sm-12 col-md-6 col-lg-6" >
<video style="width:100%; height: 100%;" controls>
  <source src="video/teste.mp4" type="video/mp4">
</video>
</div>

<div class="col-sm-12 col-md-6 col-lg-6" >
    <p>
Conheça a nossa API que lhe permite ter acesso ao nossos pacotes, preços e canais em qualquer lugar.
</p>
<p>
    <a class="btn btn-primary" href="#" role="button">Aprender Mais</a>
</p>
</div>

</div>



    <h4 class="text text-light bg-info" style="padding:20px;">Pacotes Disponiveis</h4>

   <div class="row planSection">
    @foreach($Packages as $p => $pc)
    <div class="card">
  <img class="card-img-center" src="{{asset('img/007.jpg')}}" alt="Imagem de capa do card">
  <div class="card-body">
    <h5 class="card-title">{{$pc['name']}}</h5>
    <p class="card-text">{{$pc['description']}}.</p>
    <a href="/channel/{{$pc->id}}" class="btn btn-primary">Ver Plano</a>
  </div>
</div>
@endforeach
   </div> 


<div class="newslatter">
    <div id="newsTema"><h4>Newslatter</h4></div>
    <div id="newsParagrafo">
        <p>Assine a nossa newslatter <br>
        E fique a par de todas as nossas novidades</p>
    </div>
<div id="newsFormulario">
    <form>
        <input type="text" id="formInput" placeholder="Deixe seu Email">
        <button type="submit" class="btn">Assinar</button>
    </form>
</div>

</div>
@endsection