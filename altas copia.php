<!DOCTYPE html>
<html lang="es-MX">
<head>
<title>Formulario de altas</title>
</head>
<body>
<form name="form1" method="post" action="">
  <h1>Formulario de altas</h1>
  <p>Palabra en espa&ntilde;ol: 
    <input name="txtEspanol" type="text" maxlength="20" required/>
  </p>
  <p>Palabra en ingles: 
    <input name="txtIngles" type="text" maxlength="20" required/>
  </p>
  <p>Palabra en tseltal:   
    <input name="txtTseltal" type="text" maxlength="20" required/>
  </p>
  <p>
    <input type="submit" name="btnEnviar" value="Enviar">
  </p>
</form>
<?php
if(isset($_POST['btnEnviar'])){
	require_once("php/conectar.php");
	$espanol=$_POST['txtEspanol'];
	$ingles=$_POST['txtIngles'];
	$tseltal=$_POST['txtTseltal'];
	$link = mysql_connect($host,$user,$pass);
	mysql_select_db($db, $link);
	$sql = "INSERT INTO tinformacion (espanol, ingles, tseltal) ";
	$sql .= "VALUES ('$espanol', '$ingles', '$tseltal')";
	$consulta = mysql_query($sql);
	if(!$consulta){
		echo "<script language='JavaScript' type='text/javascript'>";
		echo "alert('Error no hemos podido almacenar la informacion.');";
		echo "</script>";
	}
	else{
		echo "<script language='JavaScript' type='text/javascript'>";
		echo "alert('Hemos almacenado la informacion, gracias.');";
		echo "</script>";
	}
}
echo "<p><a href='index.php'>Volver</a></p>";
?>
</body>
</html>
