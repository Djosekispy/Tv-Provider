<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
  <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
  <link href="{{asset('css/docs.min.css')}}" rel="stylesheet">
  <link rel="stylesheet" href="{{asset('css/style.css')}}">
</head>
<body >


<div class="container-fluid">
  <div class="header cabecalho row bg-info">
    <div class="col-4" style="padding-left:30px;" id="logo">
  <img src="{{asset('img/logo.png')}}">
     </div>
<div class="col-sm-12 col-md-8 col-lg-8 text-right" id="menu">
    <div class="row">
        <ul class="nav nav-pills">
        <li class="nav-item"><a href="index.html" class="nav-link text-dark">Home</a></li>
       
        <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle text-dark" data-toggle="dropdown" href="#" role="button" aria-haspopup="true"
     aria-expanded="false">Serviços</a>
    <div class="dropdown-menu">
      <a class="dropdown-item" href="/channel/1">Fácil</a>
      <a class="dropdown-item" href="/channeel/2">Normal</a>
      <a class="dropdown-item" href="/channel/3">Grande</a>
      <a class="dropdown-item" href="/channel/4">Mega</a>

  </li>
  <li class="nav-item "><a href="#" class="nav-link text-dark">Sobre Nós</a></li>
   @auth
       <li class="nav-item "><a href="/Channels" class="nav-link text-dark">Personalizar Pacotes</a></li>
   <li class="nav-item "><a href="{{ route('my-logout') }}" onclick="event.preventDefault(); document.getElementById('my-logout-form').submit();" class="nav-link text-dark">Sair</a></li>
        @endauth
       <form id="my-logout-form" action="{{ route('my-logout') }}" method="POST" style="display: none;">
    @csrf
</form>
         @guest
       <li class="nav-item "><a href="{{route('login')}}" class="nav-link text-dark">Entrar</a></li>
       <li class="nav-item "><a href="/register" class="nav-link text-dark">Cadastrar</a></li>
       @endguest
    </ul>
    </div>
    
</div>
</div>
</div>

@yield('content')




<div class="footer row">
<div class="col-sm-3 col-md-1 col-lg-1 col-xl-1 footer-SocialMedia">
       <div class="medias" style="width:30px; height: 30px;"><img src="{{asset('icon/instagram.jpg')}}" style="width:100%; height: 100%;">
       </div>
       <div style="width:30px; height: 30px;"><img src="{{asset('icon/facebook.jpg')}}" style="width:100%; height: 100%;"></div>
<div style="width:30px; height: 30px;"><img src="{{asset('icon/zap.jpg')}}" style="width:100%; height: 100%;"></div>
<div style="width:30px; height: 30px;"><img src="{{asset('icon/twitter.jpg')}}" style="width:100%; height: 100%;"></div>
</div>

<div class="col-sm-12 col-md-3 col-lg-3 footer-SocialMedia">
 <strong>Contactos</strong> 
<div>NetGenius2022@genius.com</div>
<div>News2022@ggenius.com</div>
<div>927023710</div>
</div>
<div class="col-sm-12 col-md-3 col-lg-3 footer-SocialMedia">
    <strong> Parceiros</strong>

<div>DSTV Multichoice - Angola</div>
<div>Zap</div>
<div>Unitel</div>
</div>
<div class="col-sm-12 col-md-3 col-lg-3 footer-SocialMedia">
   <strong> Sobre Nós</strong>

<div>Quem Somos</div>
<div>O Que Fazemos</div>
<div>Missão & Visão</div>
</div>

<div class="col-sm-12 col-md-2 col-lg-2 footer-SocialMedia">
   <strong> Nossa API</strong>

<div>Documentação Oficial</div>
<div>GitHub</div>
<div>Dúvidas</div>
</div>

 <div class="footer-copyright" style="font-size:15px;">
            <div class="container">
            © 2023 Todos os direitos reservados
            <a class="grey-text text-lighten-4 right" href="#!">Rua Deolinda Rodrigues, Luango - Huíla C/N 12</a>
            </div>
          </div>
</div>

 
<script src="{{asset('js/jquery-slim.min.js')}}"></script>
<script src="{{asset('js/popper.min.js')}}"></script>
<script src="{{asset('js/bootstrap.js')}}"></script>
<script src="{{asset('js/clipboard.min.js')}}"></script>
<script src="{{asset('js/holder.min.js')}}"></script>
<script src="{{asset('js/application.js')}}"></script>
<script src="{{asset('js/search.js')}}"></script>
<script src="{{asset('js/ie-emulation-modes-warning.js')}}"></script>
<script src="{{asset('js/pwa.js')}}"></script>

  <script>
       $('.carousel').carousel({
  interval: 2000
});
  </script>
</body>
</html>
