<?php
  session_start();
  error_reporting(E_ALL & ~E_NOTICE);
?>

<!DOCTYPE html>
<html>
<head>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<title>ReadOne Bootstrap</title>

	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	
<style type="text/css">

  body
  {
    background-color: #ffc94a;
  }
  .navbarra
  {
    position: fixed;
    z-index: 100;
    background-color: #fde910;
  }

  .casinha
  {
    width: 40px;
    height: 40px;
    margin-top: 10px;
    margin-right: 5px;
  }

  .item-navbar
  {
    color: white;
    font-size: 30px;
  }

  .brand-navbar
  {
    color: white;
    font-family: "https://fonts.googleapis.com/icon?family=Material+Icons";
  }

  a.brand-navbar:hover
  {
    color: purple;
  }

  #carrossel
  {
    width: 1000px;
  }

  .footer
  {
    background-color: #ffdb3d;
    margin-left: 450px;
    bottom: 0;
    width: 899px;
  }
  .corborda
  {
    border-color: #ffdb3d;
    font-family: "https://fonts.googleapis.com/icon?family=Material+Icons";
    font-size: 20px;
  }

</style>
</head>
<body onload="volume();">

<audio id="musica" autoplay loop onload="volume();">
  <source src="flymetothemoon.mp3" type="audio/mp3">
</audio>

<nav class="navbar navbar-expand-lg col-md-12 navbarra">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="navbar-collapse collapse w-100 order-1 order-md-0 dual-collapse2">
        <ul class="navbar-nav mr-auto">
            
            <li class="nav-item">
                <a class="nav-brand mb-0 h1 brand-navbar" href="index.php">ReadOne</a>
            </li>
        </ul>
    </div>
    
    <div class="navbar-collapse collapse w-100 order-3 dual-collapse2">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a href="index.php"><img src="imagens/casa.png" class="casinha"></a>
            </li>
            <li class="nav-item">
                <a class="nav-link item-navbar " style="" href="cadastro.php">Cadastro</a>
            </li>
            <li class="nav-item">
                <a class="nav-link item-navbar " style="" href="login.php">Login</a>
            </li>
            <li class="nav-item">
                <a class="nav-link item-navbar " style="" href="livrolido.php">Lidos</a>
            </li>
            <li class="nav-item">
                <a class="nav-link item-navbar " style="" href="livrocadastro.php">Cadastre Livros</a>
            </li>
            <li class="nav-item">
                <a class="nav-link item-navbar " style="" href="detalhelivro.php">Detalhe Livro</a>
            </li>
            <li class="nav-item">
                <a class="nav-link item-navbar " style="" href="livroemcurso.php">Em curso</a>
            </li>
            <li class="nav-item">
                <a class="nav-link item-navbar " style="" href="livrodesejo.php">Desejos</a>
            </li>
            <li class="nav-item">
                <a class="nav-link item-navbar " style="" href="logout.php">Logout</a>
            </li>

            
        </ul>
    </div>
</nav>

<br><br><br><br><br><br>

<div id="carouselExampleIndicators" align="center" class="carousel slide" data-ride="carousel" style="margin-left: 200px; width: 1000px; box-shadow: 20px 20px 50px 20px #a39214">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img onclick="abrecadastro();" onmouseover="cursor();" id="mudacursor" name="carrossel" src="imagens/livros1.jpg" class="d-block w-90" alt="...">
      <div class="carousel-caption d-none d-md-block" style="width: 330px; margin-left: 185px;">
        <h5 style="background-image: linear-gradient(to bottom right, rgba(0,5,250,0.9), rgba(255,0,0,0.9));">Cadastre-se</h5>
        <p style="background-color: gray;">Descubra o melhor da leitura! Crie sua conta.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img name="carrossel" src="imagens/livros2.jpeg" class="d-block w-90" alt="...">
      <div class="carousel-caption d-none d-md-block" style="width: 250px; margin-left: 225px;">
        <h5 style="background-image: linear-gradient(to bottom right, rgba(0,5,250,0.9), rgba(255,0,0,0.9));">Segundo Slide</h5>
        <p style="background-color: gray;">Otimize sua leitura com o RedOne</p>
      </div>
    </div>
    <div class="carousel-item">
      <img name="carrossel" src="imagens/livros3.jpg" class="d-block w-90" alt="...">
      <div class="carousel-caption d-none d-md-block" style="width: 350px; margin-left: 170px;">
        <h5 style="background-image: linear-gradient(to bottom right, rgba(0,5,250,0.9), rgba(255,0,0,0.9));">Organização</h5>
        <p style="background-color: gray;">Métodos de leitura organizada pera leitores fiéis!</p>
      </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<br><br><br><br>

<!--INÍCIO DO FOOTER-->
<div style="background-color: #ffdb3d;">
<div class="card footer" >
  <div class="card-header corborda">
    <h3 style="color: gray;">Conheça nosso aplicativo</h3>
  </div>
  <div class="card-body corborda">
    <p >Funcional e simples, o ReadOne Mobile auxilia em <br>suas leituras diárias e desejos literários!</p>
  </div>
  <div class="card-footer text-muted corborda">
    <p >© 2019 ReadOne - All Rights Reserved</p>
  </div>
</div>
</div>
<!--FIM DO FOOTER-->

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script type="text/javascript">
  function volume()
{
  var audio = document.getElementById('musica');
  audio.volume = 0.125;
}
</script>


</body>
</html>
<?php

if (isset($_SESSION['nome']) != null)
  {
    echo "Bem-vindo(a) " . $_SESSION['nome'] ."!";
  }
?>