<!doctype html>
<html lang="pt-br">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.rtl.min.css"
    integrity="sha384-XfhC/Sid4FIGSXYebcOtcSCRFkd/zZzAMVipf0bNWucloRvcKK2/dpVWodQbQ1Ek" crossorigin="anonymous">
  <style>
    body {
      background-color: black;
      font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
    }

    #center {
      text-align: left;
      display: inline;
    }

    #carousel {
      height: 550px;
      width: 700px;
    }

    #produto {
      padding: 50px;
    }
    #principal{
      border-style: inset;
      border-color: rgb(124, 124, 124);
    }
  </style>

</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">
      <h2> GOinfo</h2>
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="index.php" tabindex="-1" aria-disabled="true">Página Inicial</a>
            </li>
              <a class="nav-link" href="login.php">Login</a>
            </li>
            
            <li class="nav-item">
              <a class="nav-link" href="cadastroUsuario.php" tabindex="-1" aria-disabled="true">Cadastre-se</a>
          </ul>
        </div>
  </nav>
  <div style="text-align: center; color: white; margin-top: 100px;">
    <h3>Notebook Gamer Acer Intel Core i5, 8GB, 1TB, SSD 128GB, NVIDIA GTX 1650, Endless OS - AN515-54-58CL</h3>  
  <br>
  </div>
  <div class="container-fluid">
    <div id="padding" class="row">
      <div class="col-1">
        .
      </div>
      <div style="background-color: white;" id="principal" class="col-5">
        <div id="carousel" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
            </div>
            <div class="carousel-item active">
              <img id="carousel" src="imagens/acer1.jfif" class="d-block w-100">
            </div>
            <div class="carousel-item">
              <img id="carousel" src="imagens/acer2.jpeg" class="d-block w-100">
            </div>
            <div class="carousel-item">
              <img id="carousel" src="imagens/acer3.jpg" class="d-block w-100">
            </div>
          </div>
        </div>
        <br>
      </div>
      <div style="background-color: white" id="principal" class="col-5">
        <div style="margin-top: 40px;" id="center">
          <br>
          <H3>Descrição</H3>
          <br>
          <h4>Intel Core i5, 8GB, 1TB, SSD 128GB, NVIDIA GTX 1650, Endless OS - AN515-54-58CL</h4>
          <br>
          <H5><s>De: R$6.000,00</s></H5>
          <h3 style="color: rgb(165, 3, 3);"> Por: R$5.000,00</h3>
          <a>Ou até de <b>10x de R$500,00 sem juros</b></a>
          <br>
          <a>Vendido e entregue pela GoINFO<a style="color: lawngreen;"> (FRETE GRÁTIS)</a>
          <br>
          <br>
          <a href="cadastro.html"><button style="border-radius: 10px; height: 60px; width: 250px; margin-left: 20px;" type="button" class="btn btn-success"><h2>Comprar</h2></button></a>
          <div style="margin-top: 50px">
            <input style="height: 110px; width: 300px;" type="text" placeholder="Insira seu comentário aqui...">
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj"
    crossorigin="anonymous"></script>

  <!-- Option 2: Separate Popper and Bootstrap JS -->
  <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-eMNCOe7tC1doHpGoWe/6oMVemdAVTMs2xqW4mwXrXsW0L84Iytr2wi5v2QjrP/xp" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous"></script>
    -->
</body>

</html>