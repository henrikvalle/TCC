function abrecadastro()
{
	window.location.href = "cadastro.php";
}
function cursor()
{
	document.getElementById("mudacursor").style.cursor = "pointer";
}
function outro()
{
	if (document.getElementById('O').checked == true)
	{
		document.getElementById('outrosexo').disabled = false;
	}
	else
	{
		document.getElementById("outrosexo").disabled = true;
	}
}
function cadastrar()
{
	window.location.replace = "index.php";
}
function validarSenha()
{
	senha = document.getElementById("senha").value;
	confirmasenha = document.getElementById("confirmasenha").value;
	if (senha != confirmasenha)
	{
		document.getElementById("senhainvalida").innerHTML = "Atenção: as senhas não estão iguais!";
	}
	else if (senha == confirmasenha)
	{
		document.getElementById("senhainvalida").innerHTML = "";
	}
}
function aparece()
{
	if (document.getElementById("esqaparece").checked == true)
	{
		document.getElementById("esqueci").style.visibility = "visible";
	}
	else
	{
		document.getElementById("esqueci").style.visibility = "hidden";
	}
	
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

function checa(x)
{
  var keeo = document.getElementsByName("genero")[x].value;
  var zop = document.getElementById("variavel").value;
  var texto = zop + " " +  keeo;
  var tam = keeo.length;

  if (document.getElementsByName("genero")[x].checked == true)
  {
    document.getElementById("variavel").value = texto;
  }
  else if (document.getElementsByName("genero")[x].checked == false)
  {
    document.getElementById("variavel").value = texto.substr(tam,texto);
    for(var i = 0; i<=7; i++)
    {
      document.getElementsByName("genero")[i].checked = false;
    }

  }
}
function navbar()
{
	var ue = document.createElement("A");
    ue.innerHTML = "eu sou um teste de <a>";
    document.body.appendChild(ue);
}
function volume()
{
	var audio = document.getElementById('musica');
	audio.volume = 0.125;
}
window.onload(volume());