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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  
  <title>ReadOne - Em Curso</title>

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

  .divbonita
  {
    margin-left: 50px;
    background-color: white;
    padding: 10px;
    width: 90%;
  }

   h2
  {
    font-family: "https://fonts.googleapis.com/icon?family=Material+Icons";
  }

  .margem
  {
    margin-left: 15px;
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
  .botao
  {
    background-color: #bfbc06;
  }
  .notas
  {
    width: 60px;
    height: 60px;
    margin-left: 5px;

  }

</style>
</head>
<body onload="volume();">

<!--INÍCIO DO ÁUDIO-->
<audio id="musica" autoplay loop onload="volume();">
  <source src="flymetothemoon.mp3" type="audio/mp3">
</audio>
<!--FIM DO ÁUDIO-->


<!--INÍCIO DA NAVBAR-->
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
<!--FIM DA NAVBAR-->

<br><br><br><br><br>
<?php
include ("conexaoBD.php");
if(!isset($_SESSION['login']))
{
  $s = "Faça login para acessar esse site!";
  echo "<script type='text/javascript'>alert('Para acessar esse site faça seu login!')</script>";
  echo "<div class='divbonita'> <br><br><br><br><br><br><h1 style='text-align: center;'><a href='login.php'>Faça seu login!</a></h1><br><br><br><br><br><br></div>";
}
else
{
  $nomeuser = $_SESSION['nome'];
  $id = $_SESSION['id'];
  //echo "Bem-vindo " . $nomeuser . " ! Seu ID é " . $id;
  //echo "<br>";
  $stmt = $pdo->prepare("select idlivro from user_livro where listcurso = '1' and iduser = :id");
  $stmt->bindParam(':id', $id);

  try
  {
    $stmt->execute();
    $rows = $stmt->rowCount();
    $numero = $rows;
    if ($rows > 0)
    {
      while ($array = $stmt->fetchAll(PDO::FETCH_COLUMN))
      {
      for($numero = $rows; $numero>0;$numero--)
      {

        $idlivro = $array[$numero-1];
        //echo $idlivro;

        $stmt = $pdo->prepare("select * from livro where idlivro = :idlivro");
        $stmt->bindParam(":idlivro", $idlivro);
  
        $stmt->execute();
                
        while ($row = $stmt->fetch())
        {
          $titulo = $row['titulo'];
          $sinopse = $row['sinopse'];
          $genero = $row['genero'];
          $imagem = $row['imagem'];
          $datapub = $row['datapub'];
          $registro = $row['registro'];

          $stmt = $pdo->prepare("select nome from autor_livro where idlivro = :idlivro");
          $stmt->bindParam(":idlivro", $idlivro);
          $stmt->execute();
          while ($row = $stmt->fetch())
          {
            $autor = $row['nome'];
          }
        }
            
        //echo $idlivro. "<b>" . $rows . " ". $numero . "   " . $titulo . "</b>";
    if(!isset($imagem))
    {
      $imagem = "imagens/semcapa.png";
    }
    if(!isset($titulo))
    {
      $titulo = "Nenhum livro encontrado";
    }
    if (!isset($sinopse))
    {
      $sinopse = "Nenhum livro encontrado";
    }
    if (!isset($genero)) {
      $genero = "Nenhum livro encontrado";
    }
  echo "<div class='divbonita'>

    <h2 class='margem'>".$titulo."</h2>

<div class='row'>
    <div class='card margem' style='width: 250px; height: 520px;background-color: #fff899'>
        <!--<p align='center' style='padding-top: 125px;'>FOTO VAI AQUI</p> -->
         <img style='height: 300px; width: 250px;' src='".$imagem."' class='card-img' alt='...'>
         
            <br>

            <form method='POST'>
            <span class ='margem'>Adicionar/Remover</span><br>
            <input value='".$idlivro."' name='but_desejo' type='submit' class='button btn btn-primary margem'> Lista de Desejos</input>

            <br><br>
            <input value='".$idlivro."' name='but_lido' type='submit' class='button btn btn-primary margem'> Livros Lidos</input>
            <br><br>
            <input value='".$idlivro."' name='but_curso' type='submit' class='button btn btn-primary margem'> Livros em Curso</input>
            </form>
         
    </div>
    <div class='col-sm-9 margem' style='background-color: #fff899'>
        <h5 style='padding-top: 5px';>Sinopse:</h5>
        <p style='text-align: justify;' >".$sinopse."</p>
        <h5>Gênero:</h5>
        <p>".$genero."</p>
        <h5>Data de publicação: ".$datapub." </h5>
        <h5>Registrado em nome de: ".$registro." </h5>
        <h5>Autor(es): ".$autor." </h5>
    </div>
</div>
</div>
<br><br><br>";
        $rows--;
      }
      }
    }
    else
    {
      echo "<h1>ERRO</h1>";
    }

  }
  catch(PDOException $e)
  {
    echo 'Error: '. $e->getMessage();
  }

}
  if(isset($_POST['but_desejo']))
  {
    addDesejo($_POST['but_desejo']);
  }
  else if (isset($_POST['but_curso']))
  {
    addCurso($_POST['but_curso']);
  }
  else if (isset($_POST['but_lido']))
  {
    addLido($_POST['but_lido']);
  }

function addDesejo($livro)
{
  include ("conexaoBD.php");
  $livreto = $livro;
  //echo $livreto;
    $nomeuser = $_SESSION['nome'];
    $id = $_SESSION['id'];
    //echo "Bem-vindo " . $nomeuser . " ! Seu ID é " . $id;
    //echo "<br>";
    $stmt = $pdo->prepare("select * from user_livro where iduser = :id and idlivro = :livreto");
    $stmt->bindParam(':id', $id);
    $stmt->bindParam(':livreto', $livreto);
  
    try
    {
      $stmt->execute();
      $rows = $stmt->rowCount();
      $numero = $rows;
      if ($rows > 0)
      {
        while ($row = $stmt->fetch())
        {
          $desejo = $row['listdesejo'];
        if($desejo == 0)
        {
          //echo "<br><b>".$desejo."</b>";
          $stmt = $pdo->prepare("update user_livro set listdesejo = '1' where(iduser = :iduser) and idlivro = :livreto");
          $stmt->bindParam(':iduser', $id);
          $stmt->bindParam(':livreto', $livreto);
          
          try
          {
            $stmt->execute();
          }
          catch(PDOException $e)
          {
            echo 'Error: '. $e->getMessage();
          }
        }
          $stmt = $pdo->prepare("update user_livro set listdesejo = '0' where(iduser = :iduser) and idlivro = :livreto");
          $stmt->bindParam(':iduser', $id);
          $stmt->bindParam(':livreto', $livreto);
          try
          {
            $stmt->execute();
          }
          catch(PDOException $e)
          {
            echo 'Error: '. $e->getMessage();
          }
      }
        //echo "foi";
        
      }
    }
    catch(PDOException $e)
    {
      echo 'Error: '. $e->getMessage();
    }
}

function addCurso($livro)
{
  include ("conexaoBD.php");
  $livreto = $livro;
  //echo $livreto;
    $nomeuser = $_SESSION['nome'];
    $id = $_SESSION['id'];
    //echo "Bem-vindo " . $nomeuser . " ! Seu ID é " . $id;
    //echo "<br>";
    $stmt = $pdo->prepare("select * from user_livro where iduser = :id and idlivro = :livreto");
    $stmt->bindParam(':id', $id);
    $stmt->bindParam(':livreto', $livreto);
  
    try
    {
      $stmt->execute();
      $rows = $stmt->rowCount();
      $numero = $rows;
      if ($rows > 0)
      {
        while ($row = $stmt->fetch())
        {
          $curso = $row['listcurso'];
        if($curso == 0)
        {
          //echo "<br><b>".$curso."</b>";
          $stmt = $pdo->prepare("update user_livro set listcurso = '1' where(iduser = :iduser) and idlivro = :livreto");
          $stmt->bindParam(':iduser', $id);
          $stmt->bindParam(':livreto', $livreto);
          
          try
          {
            $stmt->execute();
          }
          catch(PDOException $e)
          {
            echo 'Error: '. $e->getMessage();
          }
        }
        $stmt = $pdo->prepare("update user_livro set listcurso = '0' where(iduser = :iduser) and idlivro = :livreto");
          $stmt->bindParam(':iduser', $id);
          $stmt->bindParam(':livreto', $livreto);
          try
          {
            $stmt->execute();
          }
          catch(PDOException $e)
          {
            echo 'Error: '. $e->getMessage();
          }
      }
        //echo "foi";
        
      }
    }
    catch(PDOException $e)
    {
      echo 'Error: '. $e->getMessage();
    }
}

function addLido($livro)
{
  include ("conexaoBD.php");
  $livreto = $livro;
  //echo $livreto;
    $nomeuser = $_SESSION['nome'];
    $id = $_SESSION['id'];
    //echo "Bem-vindo " . $nomeuser . " ! Seu ID é " . $id;
    //echo "<br>";
    $stmt = $pdo->prepare("select * from user_livro where iduser = :id and idlivro = :livreto");
    $stmt->bindParam(':id', $id);
    $stmt->bindParam(':livreto', $livreto);
  
    try
    {
      $stmt->execute();
      $rows = $stmt->rowCount();
      $numero = $rows;
      if ($rows > 0)
      {
        while ($row = $stmt->fetch())
        {
          $lido = $row['listlido'];
        if($lido == 0)
        {
          //echo "<br><b>".$desejo."</b>";
          $stmt = $pdo->prepare("update user_livro set listlido = '1' where(iduser = :iduser) and idlivro = :livreto");
          $stmt->bindParam(':iduser', $id);
          $stmt->bindParam(':livreto', $livreto);
          
          try
          {
            $stmt->execute();
          }
          catch(PDOException $e)
          {
            echo 'Error: '. $e->getMessage();
          }
        }
          $stmt = $pdo->prepare("update user_livro set listlido = '0' where(iduser = :iduser) and idlivro = :livreto");
          $stmt->bindParam(':iduser', $id);
          $stmt->bindParam(':livreto', $livreto);
          try
          {
            $stmt->execute();
          }
          catch(PDOException $e)
          {
            echo 'Error: '. $e->getMessage();
          }

      }
        //echo "foi";
        
      }
    }
    catch(PDOException $e)
    {
      echo 'Error: '. $e->getMessage();
    }
}



?>

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
function notas()
{
  var pega = document.getElementsByClassName('notas');
  //pega.src = 'imagens/estrelacheia.png';

  for(var i=0; i<pega.length; i++) {
    pega[i].src = 'imagens/estrelacheia.png';
  }
}
function notassairam()
{
  var pega = document.getElementsByClassName('notas');
  //pega.src = 'imagens/estrelacheia.png';

  for(var i=0; i<pega.length; i++) {
    pega[i].src = 'imagens/estrelavazia.png';
  }
}
</script>


</body>
</html>