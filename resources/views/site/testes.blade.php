<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Minha Página</title>
    <!-- Materialize CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
</head>
<body>
    <!-- Navbar -->
    <nav>
        <div class="nav-wrapper">
            <a href="#" class="brand-logo">Minha Logo</a>
            <ul id="nav-mobile" class="right hide-on-med-and-down">
                <li><a href="#">Menu 1</a></li>
                <li><a href="#">Menu 2</a></li>
                <li><a href="#">Menu 3</a></li>
                <li><a href="#">Menu 4</a></li>
                <li><a href="#">Menu 5</a></li>
            </ul>
        </div>
    </nav>

    <!-- Seção de Boas Vindas -->
    <section class="section" style="background-color: #e6e6e6;">
        <div class="container">
            <h2>Seja bem-vindo!</h2>
            <p>Este é um exemplo de página HTML criada utilizando Materialize.</p>
        </div>
    </section>

    <!-- Seção de Newsletter -->
    <section class="section">
        <div class="container">
            <h2>Assine nossa Newsletter</h2>
            <form>
                <div class="input-field">
                    <input type="email" id="email" name="email">
                    <label for="email">Digite seu email</label>
                </div>
                <button class="btn waves-effect waves-light" type="submit" name="action">Assinar</button>
            </form>
        </div>
    </section>

    <!-- Seção de Carrossel -->
    <section class="section">
        <div class="carousel carousel-slider">
            <a class="carousel-item" href="#one!"><img src="img/img1.jpg"></a>
            <a class="carousel-item" href="#two!"><img src="img/img2.jpg"></a>
            <a class="carousel-item" href="#three!"><img src="img/img3.jpg"></a>
            <a class="carousel-item" href="#four!"><img src="img/img4.jpg"></a>
        </div>
    </section>

    <!-- Seção de Cards -->
    <section class="section">
        <div class="row">
            <div class="col s12 m6 l3">
                <div class="card">
                    <div class="card-image">
                        <img src="img/card1.jpg">
                        <span class="card-title">Card 1</span>
                    </div>
                    <div class="card-content">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    </div>
                </div>
            </div>
            <div class="col s12 m6 l3">
                <div class="card">
                    <div class="card-image">
                        <img src="img/card2.jpg">
                        <span class="card-title">Card 2</span>
                    </div>
                    <div class="card-content">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section-cards">
        <div class="container">
          <h2 class="section-title">Nossos Serviços</h2>
          <div class="row">
            <div class="col s12 m6 l3">
              <div class="card">
                <div class="card-image">
                  <img src="img/service1.jpg">
                  <span class="card-title">Serviço 1</span>
                </div>
                <div class="card-content">
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut eget enim nec justo faucibus sagittis.</p>
                </div>
              </div>
            </div>
            <div class="col s12 m6 l3">
              <div class="card">
                <div class="card-image">
                  <img src="img/service2.jpg">
                  <span class="card-title">Serviço 2</span>
                </div>
                <div class="card-content">
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut eget enim nec justo faucibus sagittis.</p>
                </div>
              </div>
            </div>
            <div class="col s12 m6 l3">
              <div class="card">
                <div class="card-image">
                  <img src="img/service3.jpg">
                  <span class="card-title">Serviço 3</span>
                </div>
                <div class="card-content">
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut eget enim nec justo faucibus sagittis.</p>
                </div>
              </div>
            </div>
            <div class="col s12 m6 l3">
              <div class="card">
                <div class="card-image">
                  <img src="img/service4.jpg">
                  <span class="card-title">Serviço 4</span>
                </div>
                <div class="card-content">
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut eget enim nec justo faucibus sagittis.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      
      <footer class="page-footer">
        <div class="container">
          <div class="row">
            <div class="col s12 m6 l3">
              <h5 class="white-text">Coluna 1</h5>
              <ul>
                <li><a class="grey-text text-lighten-3" href="#!">Link 1</a></li>
                <li><a class="grey-text text-lighten-3" href="#!">Link 2</a></li>
                <li><a class="grey-text text-lighten-3" href="#!">Link 3</a></li>
              </ul>
            </div>
            <div class="col s12 m6 l3">
              <h5 class="white-text">Coluna 2</h5>
              <ul>
                <li><a class="grey-text text-lighten-3" href="#!">Link 1</a></li>
                <li><a class="grey-text text-lighten-3" href="#!">Link 2</a></li>
                <li><a class="grey-text text-lighten-3" href="#!">Link 3</a></li>
              </ul>
            </div>
            <div class="col s12 m6 l3">
              <h5 class="white-text">Coluna 3</h5>
              <ul>
                <li><a class="grey-text text-lighten-3" href="#!">Link 1</a></li>
                <li><a class="grey-text text-lighten-3" href="#!">Link 2</a></li>
                <li><a class="grey-text text-lighten-3" href="#!">Link 3</a></li>
              </ul>
            </div>
            <div class="col s12 m6 l3">
              <h5 class="white-text">Coluna 4</h5>
              <ul>
                <li><a class="grey-text text-lighten-3" href="#!">Link 1</a></li>
                <li><a class="grey-text text-lighten-3" href="#!">Link 2</a></li>
                <li><a class="grey-text text-lighten-3" href="#!">Link 3</a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="right-align">
          <div class="container">
            <p class="grey-text text-lighten-3">Direitos Reservados &copy; 2023</p>
          </div>
        </div>
      </footer>
      