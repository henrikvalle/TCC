<?php
session_start();
error_reporting(E_ALL & ~E_NOTICE);
include 'conexaoBD.php';

if (!isset($_SESSION['login']))
{
if ($_SERVER["REQUEST_METHOD"] === 'POST')
{
  $email = $_POST['email'];
  $senha = $_POST['senha'];

  $stmt = $pdo->prepare("select * from user where email = :email");
  $stmt -> bindParam(':email', $email);

  $stmt->execute();
  $rows = $stmt->rowCount();
  if ($rows > 0)
  {
    while ($row = $stmt->fetch())
    {
      $nome = $row['nome'];
      $id = $row['iduser'];
      if ($senha == $row['senha'])
      {
        //session_start();
        $_SESSION['login'] = $email;
        $_SESSION['senha'] = $senha;
        $_SESSION['nome'] = $nome;
        $_SESSION['id'] = $id;
        //echo "Bem-vindo " . $_SESSION['nome'] . " ! Seu ID é " . $_SESSION['id'];
      }
      else
      {
        echo "<script type='text/javascript'>alert('Senha incorreta!')</script>";
      }
    }
  }
  else
  {
    echo "<script type='text/javascript'>alert('Este endereço de email não foi cadastrado!')</script>";
  }

    
}
else if ($_SERVER["REQUEST_METHOD"] === 'GET')
{
  $email = $_GET['esqueciemail'];
  $stmt = $pdo->prepare("select * from user where email = :email");
  $stmt -> bindParam(':email', $email);

  $stmt->execute();
  $rows = $stmt->rowCount();
  if ($rows > 0)
  {
    while ($row = $stmt->fetch())
    {
      $senha = $row['senha'];
    }
  }
}
}
else
{
  echo "<script type='text/javascript'>alert('Um usuário está logado no momento. Para sair, clique em LOGOUT no menu de navegação')</script>";
}
?>
<!DOCTYPE html>
<html>
<head>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<title>Login ReadOne</title>

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
  h2
  {
  	font-family: "https://fonts.googleapis.com/icon?family=Material+Icons";
  }
  .divbonita
  {
  	margin-left: 50px;
    margin-top: 50px;
  	background-color: white;
    padding: 10px;
    width: 90%;
  }
  .margem
  {
  	margin-left: 15px;
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
<body>

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

<br><br><br><br>

<form class="divbonita" method="POST">

	<h2 class="margem">Faça seu login!</h2>
	<div class="form-row">
	<div class="col-7">
	<table style="background-color: #fff899">
		<tr>
			<td>
				<div class="margem">
				<img src="imagens/email.png" style="width: 20px">
				<label class="margem">Email</label>
			</div>
			</td>

			<td>
				<input style="width: 500px; margin-right: 5px;" class="margem" type="text" name="email" id="email" required>
			</td>
		</tr>
		<tr><td><br></td></tr>
		
		<tr>
			<td>
				<div class="margem">
					<img src="imagens/chave.png" style="width: 20px">
					<label class="margem">Senha</label>
				</div>
			</td>

			<td>
				<input style="width: 500px; margin-right: 5px;" class="margem" type="password" name="senha" id="senha" required>
			</td>
		</tr>
		
	</table>
	<br>
	<input type="checkbox" name="esqaparece" id="esqaparece" onchange="aparece();"> <label for="esqaparece">Esqueceu a senha?</label><br><br>
	</div>
	</div>

	<button type="submit" class="btn btn-primary">Entrar</button>

</form>

<form class="divbonita" id="esqueci" method="GET" style="visibility: hidden;">
	<div class="margem form-row">
		<div id="esqsenha" class="col-4 margem" style="background-color: #fff899; margin-right: 30px; margin-left: -20px;">
			<b>Esqueceu sua senha?</b>
			<br>
			<i class="far fa-envelope margem"></i>
			<label class="margem">Email: </label>
			<input required type="text" class="margem" name="esqueciemail" id="esqueciemail" placeholder="Digite seu email" style="width: 250px;">
      <br>
      <i class="fas fa-key margem"></i>
      <label class="margem">Senha: </label>
      <span class="margem"><?php if (isset($senha)) { echo $senha; } ?> </span>
			<br><br>
			<button type="submit" class="btn btn-primary" style="background-color: green">Ir</button>
		</div>
	</div>
</form>

<br><br><br><br>

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

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

<script type="text/javascript" src="scriptzinho.js"></script>


</body>
</html>
