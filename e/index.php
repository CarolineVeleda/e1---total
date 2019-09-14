<?php
session_start();

echo 'coe '.$_SESSION['nome_usuario'];
?>


<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Home</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="manifest" href="https://carolveleda.github.io/e/manifest.json">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
        crossorigin="anonymous">

    <link rel="stylesheet" href="style.css">

</head>

<body>


<nav class="navbar navbar-expand-lg navbar-light">
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbar2" aria-controls="navbar2"
        aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand" href="index.html">
        <img src="logo.png" width="65" height="60" alt="Logo">
    </a>
    <a class="" href="login.html">Entrar</a>

    <div class="collapse navbar-collapse justify-content-between" id="navbar2">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="index.html" aria-haspopup="true" aria-expanded="false">
                    Início
                </a>
            </li>


            <li class="nav-item">
                <a class="nav-link" href="vender.html" aria-haspopup="true" aria-expanded="false">
                    Vender
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="pesquisar.html" aria-haspopup="true" aria-expanded="false">
                   Comprar 
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="minhasVendas.html" aria-haspopup="true" aria-expanded="false">
                   Minhas Vendas 
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="index.html.html" aria-haspopup="true" aria-expanded="false">
                    Minhas Compras
                </a>
            </li>
        </ul>
    </div>
</nav>


<br>



    <div class="text-center">

    <h3 class="destitulo cor">Bem Vindo!</h3>
                
        <br>

    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="d-block w-100" src="i1.jpg" alt="Primeiro Slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="i4.jpg" alt="Terceiro Slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="i5.jpg" alt="Terceiro Slide">
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Anterior</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Próximo</span>
        </a>
      </div>


    </div>


<br>
<br>


    <div>
        <hr class="hr">
        <h3 class="destitulo cor">Produtos em Destaques</h3>
        <br>
        <div class="ha">
            <div class="card text-center" style="width: 10rem;">
                <img class="card-img-top" src="c1.jpg" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Cebola</h5>
                    <p class="card-text">R$ 5,00</p>
                </div>

                <div class="card-body">
                    <a href="infoProduto.html" class="btn btn-outline-danger">Comprar</a>
                </div>
            </div>


            <div class="card text-center" style="width: 10rem;">
                <img class="card-img-top" src="c2.jpg" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Cenoura</h5>
                    <p class="card-text">R$ 5,00</p>
                </div>

                <div class="card-body">
                    <a href="informacoes.html" class="btn btn-outline-danger">Comprar</a>
                </div>
            </div>

            <div class="card text-center" style="width: 10rem;">
                <img class="card-img-top" src="c3.jpg" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Alface</h5>
                    <p class="card-text">R$ 5,00</p>
                </div>

                <div class="card-body">
                    <a href="informacoes.html" class="btn btn-outline-danger">Comprar</a>
                </div>
            </div>

            <div class="card text-center" style="width: 10rem;">
                <img class="card-img-top" src="c4.jpg" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Tomate</h5>
                    <p class="card-text">R$ 5,00</p>
                </div>

                <div class="card-body">
                    <a href="informacoes.html" class="btn btn-outline-danger">Comprar</a>
                </div>
            </div>
        </div>
  
    </div>

    <br>
    <br>

<!--
    <div>Icons made by
        <a href="https://br.flaticon.com/autores/freepik" title="Freepik">Freepik</a> from
        <a href="https://br.flaticon.com/" title="Flaticon">www.flaticon.com</a> is licensed by
        <a href="http://creativecommons.org/licenses/by/3.0/" title="Creative Commons BY 3.0"
            target="_blank">CC 3.0 BY</a>
    </div>-->

    <script async src="sw.js"></script>

    <script>
               
               if (navigator.serviceWorker.controller) {
                 console.log('[PWA Builder] active service worker found, no need to register')
               } else {
                 navigator.serviceWorker.register('sw.js', {
                   scope: './'
                 }).then(function(reg) {
                   console.log('Service worker has been registered for scope:'+ reg.scope);
                 });
               }
           </script>


    <script async src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
    <script asyc src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script async src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
    <script async src="js/main.js"></script>




</body>

</html>