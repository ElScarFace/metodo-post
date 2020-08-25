<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body bgcolor="#67FAA4">
<h1>Sus Datos De Usuario</h1>
<?php
print "<b>Usuario: </b>".$_POST["txtnom"]. "";
print " ".$_POST["txtapepat"]. "";
print " ".$_POST["txtapemat"]. ".<br>";
if ($_REQUEST['optsexo']=="Masculino")
{

}
if ($_REQUEST['optsexo']=="Femenino")
{

}
print "<b>Sexo:</b> ".$_POST["optsexo"]. ".<br>";

    if (is_array($_POST['chk'])) {
        $selected = '';
        $num_countries = count($_POST['chk']);
        $current = 0;
        foreach ($_POST['chk'] as $key => $value) {
            if ($current != $num_countries-1)
                $selected .= $value.', ';
            else
                $selected .= $value.'.';
            $current++;
        }

    echo '<div><b>Tus Idiomas: </b>'.$selected.'</div>';
} 

if ($_REQUEST['cnbestado']=="Soltero")
{
	
}
if ($_REQUEST['cnbestado']=="Casado")
{
	
}
if ($_REQUEST['cnbestado']=="Viudo")
{
	
}
if ($_REQUEST['cnbestado']=="Divorciado")
{
	
}
print "<b>Estado:</b>".$_POST["cnbestado"]. ".<br>";


print "<b>Fecha: </b>".$_POST["dtfecha"]. "<br>";
print "<b>Hora de registro: </b>".$_POST["thora"]. " <br>";
print "<b>Su clave: </b>".$_POST["txtclave"]. " <br>";


if ($_REQUEST['lstpasatiempos']=="Leer")
{
}
if ($_REQUEST['lstpasatiempos']=="Escuchar musica")
{
}
if ($_REQUEST['lstpasatiempos']=="Dibujar")
{
}
if ($_REQUEST['lstpasatiempos']=="Internet")
{
}
print "<b>Sus pasatiempos: </b><br>";
$usuarios = array();
$usuarios = $_POST['lstpasatiempos'];
foreach($usuarios as $user){

	echo "-".$user.".<br>";
}
 



print "<b>Imagen ingresada: </b>".$_POST["txtfoto"]. " <br>";
print "<b>Comentario: </b>".$_POST["txtcomentario"]. " <br>";

?>
<br><p>Realizar de nuevo otra consulta<a href="formu.html">Pulse aqui</a></p>
</body>
</html>