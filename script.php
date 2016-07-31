<?php
if(isset($_POST['btnEnviar'])){
	require_once("php/conectar.php");
	$espanol=$_POST['txtEspanol'];
	$ingles=$_POST['txtIngles'];
	$tseltal=$_POST['txtTseltal'];
	$tsotsil=$_POST['txtTsotsil'];
	$tojolabal=$_POST['txtTojolabal'];
	$chol=$_POST['txtChol'];
	$link = mysql_connect($host,$user,$pass);
	mysql_select_db($db, $link);
	$sql="UPDATE tinformacion SET ingles='$ingles', tseltal='$tseltal', chol='$chol', tsotsil='$tsotsil', tojolabal='$tojolabal' WHERE espanol='$espanol'";
	$consulta = mysql_query($sql);
	if(!$consulta){
		echo "<script language='JavaScript' type='text/javascript'>";
		echo "alert('Error no hemos podido modificar la informacion.');";
		echo "</script>";
	}
	else{
		echo "<script language='JavaScript' type='text/javascript'>";
		echo "alert('Hemos modificado la informacion, gracias.');";
		echo "</script>";
	}
	echo "<p><a href='edicion.php'>Volver</a></p>";
	echo "<p><a href='index.php'>Ir a la p&aacute;gina principal</a></p>";
}
?>
