<!DOCTYPE html>
<html lang="es-MX">
<head>
  <title>Diccionario intraBACH</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="../bitacora/css/bootstrap.min.css" rel="stylesheet">
	<link href="../bitacora/css/bootstrap-responsive.min.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">
	<script type="../bitacora/text/javascript" src="js/jquery.min.js"></script>
	<script type="../bitacora/text/javascript" src="js/bootstrap.min.js"></script>
	<script type="../bitacora/text/javascript" src="js/scripts.js"></script>
</head>
<body>
<div class="container-fluid">
	<h1>Diccionario Multilingue</h1><center><h2>intraBACH</h2></center>
	<div class="row-fluid">
		<div class="span6">			
			<form method="post" action="">
				<fieldset>
					<legend>Escriba la palabra:</legend>
					<textarea name="texto" required/></textarea>
					<p>
					  <select name="traducir">
					    <option value="0">Ingl&eacute;s-Espa&ntilde;ol</option>
					    <option value="1">Espa&ntilde;ol-Ingl&eacute;s</option>
					    <option value="2">Tsotsil-Espa&ntilde;ol</option>
					    <option value="3">Espa&ntilde;ol-Tsotsil</option>
						<option value="4">Tsotsil-Ingl&eacute;s</option>
					    <option value="5">Ingl&eacute;s-Tsotsil</option>
				      </select>
					</p>				
					<p><button type="submit" class="btn-inverse" name="enviar">Traducir</button></p>
				</fieldset>
			</form>
		</div>
		<div class="span6">
			<h3>Traducci&oacute;n:</h3>
			<?php
			if(isset($_POST['enviar'])){
				$opcion = $_POST['traducir']; // Pasamos a una variable el valor asignado a traduccion
				$texto = $_POST['texto']; // Pasamos a una variable el texto a traduccion
				// Conectamos con la base de datos
				require_once("php/conectar.php");
				$link = mysql_connect($host,$user,$pass);
				// Seleccionamos la tabla en la que buscaremos la traduccion
				switch($opcion){
					case 0: // Ingles a Español
						require_once("php/ingEsp.php");
						break;
					case 1: // Español a Ingles
						require_once("php/espIng.php");
						break;
					case 2: // Tsotsil a Español
						require_once("php/tsoEsp.php");
						break;
					case 3: // Español a Tsotsil
						require_once("php/espTso.php");
						break;
					case 4: // Tsotsil a Ingles
						require_once("php/tsoIng.php");
						break;
					default: // Ingles a Tsotsil
						require_once("php/ingTso.php");
				} // Fin del switch				
			} // Fin codigo del boton Traducir
			?>
		</div>
	</div>
	<p><a href="altas.php">Altas</a></p>
	<p><a href="edicion.php">Ediciones</a></p>
</div>
</body>
</html>