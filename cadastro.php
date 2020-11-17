<!DOCTYPE html>
<html>
<head>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

	<title>Cadastro ReadOne</title>
	
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <meta charset="utf-8">

    <style type="text/css">

        body
        {
            background-color: #ffc94a;
        }

        div.body-content
        {
            margin-bottom: 400px;
        }
        .navbarra
        {
          position: fixed;
          z-index: 100;
          background-color: #fde910;
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
        .casinha
        {
          width: 40px;
          height: 40px;
          margin-top: 10px;
          margin-right: 5px;
        }

        a.brand-navbar:hover
        {
            color: purple;
        }

        .cadastrologin
        {
            margin-top: 50px;
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
        .preview-img
        {
            width: 250px;
            height: 250px;
            border-style: groove;
        }

    </style>

</head>
<body style="background-color: #ffc94a;">

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

<form class="cadastrologin was-validated" enctype='multipart/form-data' method="POST">

    <h2>Preencha os campos para criar sua conta!</h2>

  <div class="form-row">

    <div class="form-group col-md-6">
      <label >Nome</label>
      <input type="text" class="form-control is-invalid" id="nome" name="nome" required>
      <div class="invalid-feedback">
        Preencha este campo com seu nome.
      </div>
    </div>

    <div class="form-group col-md-6">
      <label>Sobrenome</label>
      <input type="text" class="form-control is-invalid" id="sobrenome" name="sobrenome" required>
      <div class="invalid-feedback">
        Preencha este campo com seu sobrenome.
      </div>
    </div>
  </div>

  <div class="form-row">
    <div class="col-6">
        <label>Sexo</label> <br>
        <div class="custom-control custom-radio custom-control-inline">
            <input type="radio" class="custom-control-input" id="M" name="sexo" value="M" required onclick="outro();">
            <label class="custom-control-label margem" for="M">M</label>
        </div>

        <div class="custom-control custom-radio custom-control-inline">
            <input type="radio" class="custom-control-input" id="F" name="sexo" value="F" required onclick="outro();">
            <label class="custom-control-label margem" for="F">F</label>
        </div>
        <div class="custom-control custom-radio custom-control-inline">
            <input type="radio" class="custom-control-input" id="O" name="sexo" value="O" required onclick="outro();">
            <label class="custom-control-label margem" for="O">O</label>
            <input class="margem" type="text" name="sexo" id="outrosexo" placeholder="Digite seu sexo" disabled required>

            <div class="invalid-feedback">Preencha este campo.</div>
        </div>
    </div>
    <div class="col-4">
        <label>Data de Nascimento</label>
        <input type="date" class="form-control is-invalid" id="datanasc" name="datanasc" required>
    </div>
  </div>

  <div class="form-row">
    <div class="form-group col-md-6">
      <label>E-mail</label>
      <input type="text" class="form-control is-invalid" id="email" name="email" required>
    </div>
    <div class="form-group col-md-3">
      <label>Senha</label> <br>
      <input class="form-control is-invalid" type="password" name="senha" id="senha" required placeholder="Digite sua senha">
    </div>
    <div class="form-group col-md-3">
      <label>Confirmar senha</label> <br>
      <input type="password" class="form-control is-invalid" name="confirmasenha" id="confirmasenha" onchange="validarSenha()"  required placeholder="Confirme sua senha">
      <div class="invalid-feedback">
          <span id="senhainvalida">
              
          </span>
      </div>
    </div>
  </div>

<div class="form-row">
  <div class="form-group col-6">
      <label>Imagem de perfil</label> <br>
      <input class="file-chooser" type='file' name='file'>
  </div>
  <div class="form-group col-6">
      <img class="preview-img">
  </div>
  </div>

  <button type="submit" class="btn btn-primary" name="but_upload">Cadastrar</button>
</form>

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
<script type="text/javascript">

    const $ = document.querySelector.bind(document);
    const previewImg = $('.preview-img');
    const fileChooser = $('.file-chooser');

    fileChooser.onchange = e =>
    {
        const fileToUpload = e.target.files.item(0);
        const reader = new FileReader();
        // evento disparado quando o reader terminar de ler
        reader.onload = e => previewImg.src = e.target.result;
        // solicita ao reader que leia o arquivo
        // transformando-o para DataURL.
        // Isso disparará o evento reader.onload.
        reader.readAsDataURL(fileToUpload);
    };
</script>

</body>
</html>

<?php
error_reporting(E_ALL & ~E_NOTICE);
if(isset($_POST['but_upload'])){
 
  $imagem = $_FILES['file']['name'];
  $target_dir = "imagens/";
  $target_file = $target_dir . basename($_FILES["file"]["name"]);

  // Select file type
  $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

  // Valid file extensions
  $extensions_arr = array("jpg","jpeg","png");
  if ($_SERVER["REQUEST_METHOD"] === 'POST')
{
    include("conexaoBD.php");
    //session_start();
    $nome = $_POST['nome'];
    $sobrenome = $_POST['sobrenome'];
    $sexo = $_POST['sexo']; 
    if ($sexo == 'O')
    {
        $sexo = $_POST['outrosexo'];
    }    
    $nascimento = $_POST['datanasc'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $confirmasenha = $_POST['confirmasenha'];
    

    if ($senha == $confirmasenha)
    {
        if ((trim($nome) == "") || (trim($email)) == "" || (trim($senha)) == "") 
        {
          echo "<script type='text/javascript'>alert('Preencha todos os campos!')</script>";
        }
        else
        {
          if( in_array($imageFileType,$extensions_arr) )
          {
            //convert to base_64
            $image_base64 = base64_encode(file_get_contents($_FILES['file']['tmp_name']) );
            $image = 'data:image/'.$imageFileType.';base64,'.$image_base64;

          $stmt = $pdo->prepare("select * from user where email = :email");
          $stmt -> bindParam(':email', $email);

          $stmt->execute();

          $rows = $stmt->rowCount();
          if ($rows <= 0) {

                    $stmt = $pdo->prepare("insert into user (nome, sexo, email, senha, diaNasc, imagem) values(:nome :sobrenome, :sexo, :email, :senha, :nascimento, :image)");
                    $stmt->bindParam(':nome', $nome);
                    $stmt->bindParam(':sobrenome', $sobrenome);
                    $stmt->bindParam(':sexo', $sexo);
                    $stmt->bindParam(':email', $email);
                    $stmt->bindParam(':senha', $senha);
                    $stmt->bindParam(':nascimento', $nascimento);
                    $stmt->bindParam(':image', $image);
                    $stmt->execute();
                    //move_uploaded_file($_FILES['file']['tmp_name'],$target_dir.$imagem);

                    echo "<span id='sucess'>Usuário Cadastrado!</span>";
                } else {
                    echo "<span id='error'>Usuário já existente!</span>";
                }
                }


        }
    }
    else
    {
        echo "<script type='text/javascript'>alert('As senhas estão diferentes!');</script>";
    }
}
}



?>