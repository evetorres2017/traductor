<?php
	mysql_select_db($db,$link);
	require_once("longCar.php");
	if($longitud<21){
		$consulta = mysql_query("SELECT * FROM tinformacion where (espanol='$texto')", $link);
		if($row=mysql_fetch_array($consulta)){
			echo "<i>".$row["ingles"]."</i><br>";
		}
		else{
			echo "<script language='JavaScript' type='text/javascript'>";
			echo "alert('No se ha encontrado ningún registro!');";
			echo "</script>";
		}
	}
	else{
		echo "<script language='JavaScript' type='text/javascript'>";
		echo "alert('Error - Caracteres máximos 20');";
		echo "</script>";
	}
	mysql_free_result($consulta);
?>