<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
     <link rel="stylesheet" href="{{asset('css/materialize.css')}}">

</head>
<body>
    <nav class="purple darken-4">
        <div class="nav-wrapper">
          <a href="#" class="brand-logo">
              <img src="{{asset('img/logo.png')}}">
          </a>
          <ul id="nav-mobile" class="right">
            <li><a href="/">Home</a></li>
            <li><a class='dropdown-trigger' href='#' data-target='dropdown1' >Serviços</a></li>
            <li><a href="#">Sobre Nós</a></li>
            <li><a href="#">Perfil</a></li>
            <li><a href="#">Personalizar Pacote</a></li>
            <li><a href="/login">Entrar</a></li>
            <li><a href="/register">Criar Conta</a></li>
          </ul>
        </div>
      </nav>


  <ul id='dropdown1' class='dropdown-content  lime lighten-4'>
    <li><a href="#">Facil</a></li>
    <li><a href="#!">Normal</a></li>
    <li><a href="#!">Grande</a></li>
    <li><a href="#!">Mega</a></li>
  </ul>






@yield('content')




      <footer class="page-footer blue-grey darken-3">
          <div class="container centro">
            <div class="row centro">


      <div class="col pacotes">
          <ul>
             <li>
                <h6>Nossos Canais</h6>

            </li>
            <li>
                Facebook
            </li>
             <li>
                Twitter
            </li>
             <li>
                Instagram
            </li>
             <li>
                Youtube
            </li>
          </ul>
      </div>
       <div class="col pacotes">
          <ul>
             <li>
                <h6>Sobre Nós</h6>

            </li>
            <li>
                Quem Somos
            </li>
             <li>
                O que fazemos
            </li>
             <li>
                Missão
            </li>
             <li>
                Visão
            </li>
          </ul>
      </div>
       <div class="col pacotes">
          <ul>
             <li>
                <h6>Nossos Parceiros</h6>

            </li>
            <li>
                DSTV
            </li>
             <li>
                ZAP
            </li>
             <li>
                UNITEL
            </li>
             <li>
                MOVICEL
            </li>
          </ul>
      </div>



            </div>
          </div>


          <div class="footer-copyright">
            <div class="container">
            © 2023 Copyright Text | Lubango - Angola Rua Deolinda Rodrigues C/N 13
            </div>
          </div>
        </footer>






<script type="text/javascript" src="{{asset('js/jquery.js')}}"></script>
<script type="text/javascript" src="{{asset('js/materialize.min.js')}}"></script>
 <script type="text/javascript">

      $(document).ready(function(){
M.AutoInit();
$(".dropdown-trigger").dropdown({
    'hover': false,
    'coverTrigger': false
});
$('.sidenav').sidenav();
});

 </script>

</body>
</html>
