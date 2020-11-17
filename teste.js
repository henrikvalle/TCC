window.onload = adicionalivros();
function navbar()
{
	var ue = document.createElement("A");
    ue.innerHTML = "eu sou um teste de <a>";
    document.body.appendChild(ue);
}
function adicionalivros()
{
    var div = document.createElement("DIV");
    var a = document.createElement("A");
    a.innerHTML = "OI";
    var img = document.createElement("IMG");
    var btn = document.createElement("BUTTON");
    div.innerHTML = "<a href='login.php'>Teste <b>FUNCIONA</B>";
    //document.body.appendChild(div);
    btn.value = "teste? deu certo?";
    document.body.appendChild(btn);
}