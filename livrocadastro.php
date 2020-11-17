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
        .multiselect
        {
          width: 200px;
        }
        
        .selectBox {
          position: relative;
        }
        
        .selectBox select {
          width: 100%;
          font-weight: bold;
        }
        
        .overSelect {
          position: absolute;
          left: 0;
          right: 0;
          top: 0;
          bottom: 0;
        }
        
        #checkboxes {
          display: none;
          border: 1px #dadada solid;
        }
        
        #checkboxes label {
          display: block;
        }
        
        #checkboxes label:hover {
          background-color: #1e90ff;
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

    <h2>Preencha os campos para cadastrar o livro!</h2>

  <div class="form-row">

    <div class="form-group col-md-6">
      <label >Título do livro:</label>
      <input type="text" class="form-control is-invalid" id="titulo" name="titulo" required>
      <div class="invalid-feedback">
        Preencha este campo com o título do livro.
      </div>
    </div>

    <div class="form-group col-md-6">
      <label>Nome(s) do(s) Autor(es):</label>
      <input type="text" class="form-control is-invalid" id="autor" name="autor" required>
      <div class="invalid-feedback">
        Preencha este campo com o(s) nome(s) do(s) autor(es).
      </div>
    </div>
  </div>

  <div class="form-row">
    <div class="multiselect form-group col-2">
      <label>Gênero:</label>
    <div class="selectBox" onclick="showCheckboxes()">
      <select>
        <option>Gênero</option>
      </select>
      <div class="overSelect"></div>
    </div>
    <div id="checkboxes">
      <label for="Drama"><input type="checkbox" id="Drama" name="genero" value="Drama" onclick="checa(0)">Drama</label>
      <label for="Ficcao"><input type="checkbox" id="Ficcao" name="genero" value="FicçãoCientífica" onclick="checa(1)">Ficção Científica</label>
      <label for="Romance"><input type="checkbox" id="Romance" name="genero" value="Romance" onclick="checa(2)">Romance</label>
      <label for="Mangá"><input type="checkbox" id="Mangá" name="genero" value="Mangá" onclick="checa(3)">Mangá</label>
      <label for="Infantil"><input type="checkbox" id="Infantil" name="genero" value="Infantil" onclick="checa(4)">Infantil</label>
      <label for="Jovens"><input type="checkbox" id="Jovens" name="genero" value="Jovens" onclick="checa(5)">Jovens e Adolescentes</label>
      <label for="Religião"><input type="checkbox" id="Religião" name="genero" value="Religião" onclick="checa(6)">Religião</label>
      <label for="Suspense"><input type="checkbox" id="Suspense" name="genero" value="Suspense" onclick="checa(7)">Suspense</label>
      
    <div>
      <input type="text" id="variavelgenero" name="variavelgenero" style="width: 550px; visibility: hidden;">
    </div>
  </div>
    
</div>
  <div class="form-group col-5">
        <label>Data de publicação:</label>
        <input type="date" class="form-control is-invalid" id="datapub" name="datapub" required>
    
  </div>
    <div class="form-group col">
      <label>Registro:</label>
      <input type="text" class="form-control is-invalid" id="registro" name="registro" required>
  </div>
</div>


<div class="form-row">
  <label>Sinopse:</label>
  <textarea class="form-control is-invalid" required name="sinopse" id="sinopse"></textarea>
  <!--<input class="form-control is-invalid" type="text" name="sinopse" required style="height: 250px;">-->
</div>
    
<br>
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
    }
 var expanded = false;

function showCheckboxes() {
  var checkboxes = document.getElementById("checkboxes");
  if (!expanded) {
    checkboxes.style.display = "block";
    expanded = true;
  } else {
    checkboxes.style.display = "none";
    expanded = false;
  }
}

function volume()
{
  var audio = document.getElementById('musica');
  audio.volume = 0.125;
}

function checa(x)
{
  var keeo = document.getElementsByName("genero")[x].value;
  var zop = document.getElementById("variavelgenero").value;
  var texto = zop + " " +  keeo;
  var tam = keeo.length;

  if (document.getElementsByName("genero")[x].checked == true)
  {
    document.getElementById("variavelgenero").value = texto;
  }
  else if (document.getElementsByName("genero")[x].checked == false)
  {
    document.getElementById("variavelgenero").value = texto.substr(tam,texto);
    for(var i = 0; i<=7; i++)
    {
      document.getElementsByName("genero")[i].checked = false;
    }

  }
}
</script>

</body>
</html>

<?php
error_reporting(E_ALL & ~E_NOTICE);
function cadastra($pdo, $titulo, $sinopse, $datapub, $registro, $genero, $imagem, $autor)
{
  if(isset($_POST['but_upload']))
  {
 
    $imagem = $_FILES['file']['name'];
    $target_dir = "imagens/";
    $target_file = $target_dir . basename($_FILES["file"]["name"]);
  
    // Select file type
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
  
    // Valid file extensions
    $extensions_arr = array("jpg","jpeg","png");
  }
      if( in_array($imageFileType,$extensions_arr) )
      {
        //convert to base_64
        $image_base64 = base64_encode(file_get_contents($_FILES['file']['tmp_name']) );
        $image = 'data:image/'.$imageFileType.';base64,'.$image_base64;

        $stmt = $pdo->prepare("select * from livro where titulo = :titulo");
        $stmt->bindParam(':titulo', $titulo);

        $stmt->execute();

        $rows = $stmt->rowCount();
        if ($rows <= 0)
        {
          $stmt = $pdo->prepare("insert into livro (titulo, sinopse, datapub, registro, genero, imagem) values(:titulo, :sinopse, :datapub, :registro, :genero, :image)");
          $stmt->bindParam(':titulo', $titulo);
          $stmt->bindParam(':sinopse', $sinopse);
          $stmt->bindParam(':datapub', $datapub);
          $stmt->bindParam(':registro', $registro);
          $stmt->bindParam(':genero', $genero);
          $stmt->bindParam(':image', $image);
          $stmt->execute();

          $stmt = $pdo->prepare("insert into autor (nome) values(:autor)");
          $stmt->bindParam(':autor', $autor);
          $stmt->execute();

          $stmt = $pdo->prepare("select idlivro from livro where titulo = :titulo");
          $stmt->bindParam(':titulo', $titulo);
          $stmt->execute();
          while ($row = $stmt->fetch())
          {
            $idlivro = $row['idlivro'];
            
          }
          $stmt = $pdo->prepare("insert into autor_livro (idlivro, nome) values(:idlivro,:nome)");
          $stmt->bindParam(':idlivro', $idlivro);
          $stmt->bindParam(':nome', $autor);
          $stmt->execute();
          

          //move_uploaded_file($_FILES['file']['tmp_name'],$target_dir.$imagem);

          echo "<span id='sucess'>Livro Cadastrado!</span>";
        }
        else
        {
          echo "<span id='error'>Livro já existente!</span>";
        }
      }
}

include("conexaoBD.php");

$titulo = $_POST['titulo'];
$sinopse = $_POST['sinopse'];
$datapub = $_POST['datapub'];
$registro = $_POST['registro'];
$genero = $_POST['variavelgenero'];
$autor = $_POST['autor'];

if ((trim($titulo) == "") || (trim($sinopse)) == "" || (trim($registro)) == "" || (trim($genero)) == "" || (trim($autor)) =="") 
{
  echo "<script type='text/javascript'>alert('Preencha todos os campos!')</script>";
}
else
{
  cadastra($pdo, $titulo, $sinopse, $datapub, $registro, $genero, $imagem, $autor);
}


?>