<!DOCTYPE html>
<html lang="es-MX">
<head>
<title>Formulario de ediciones</title>
</head>
<body>
<h1>Formulario de busqueda</h1>
<form name="form1" method="post" action="">
<p>Escriba la palabra en espa&ntilde;ol a modificar: 
    <input type="text" name="txtBusqueda" maxlength="20" required/>
 </p>
<input type="submit" name="btnConsultar" value="Enviar">
</form>
<?php
if(isset($_POST['btnConsultar'])){
	require_once("php/conectar.php");
	$buscar=$_POST['txtBusqueda'];
	$link = mysql_connect($host,$user,$pass);
	mysql_select_db($db, $link);
	$consulta = mysql_query("SELECT * FROM tinformacion where (espanol='$buscar')", $link);
	if($row=mysql_fetch_array($consulta)){		
?>
<form name="form2" method="post" action="script.php">
	<h1>Formulario de ediciones</h1>
  <p>Palabra en espa&ntilde;ol: 
    <input type="text" name="txtEspanol" value="<?php echo $row["espanol"]; ?>" maxlength="20" required/>
  </p>
  <p>Palabra en ingles: 
    <input type="text" name="txtIngles" value="<?php echo $row["ingles"]; ?>" maxlength="20" required/>
  </p>
  <p>Palabra en tseltal:   
    <input type="text" name="txtTseltal" value="<?php echo $row["tseltal"]; ?>" maxlength="20" required/>
  </p>
  <p>Palabra en tsotsil: 
    <input type="text" name="txtTsotsil" value="<?php echo $row["tsotsil"]; ?>" maxlength="20" required/>
  </p>
  <p>Palabra en tojolabal: 
    <input type="text" name="txtTojolabal" value="<?php echo $row["tojolabal"]; ?>" maxlength="20" required/>
  </p>
  <p>Palabra en chol:   
    <input type="text" name="txtChol" value="<?php echo $row["chol"]; ?>" maxlength="20" required/>
  </p>
  <p>
    <input type="submit" name="btnEnviar" value="Enviar">
  </p>
</form>
<?php
	}
	else{
		echo "<script language='JavaScript' type='text/javascript'>";
		echo "alert('No se ha encontrado ningún registro!');";
		echo "</script>";
	}
}
echo "<p><a href='index.php'>Volver</a></p>";
?>
</body>
</html>
