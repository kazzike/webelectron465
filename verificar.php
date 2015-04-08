<html lang="es">
<head>
<title>Electrón 465</title>

<meta charset="UTF-8">
<link href="css/bootstrap.css" rel='stylesheet' type='text/css'>
<link href="css/templatemo_style.css" rel='stylesheet' type='text/css'>
</head>
<body>


<?php

if(isset($_GET['v'])){

	echo "iniciando";

	
	$conexion=mysql_connect('localhost', 'electro4_electro', 'p13=3e8lxTTB');
			if ( !$conexion ) {echo 'no se pudo conectar';}
							mysql_select_db('electro4_webelectron', $conexion);


	$consultar = 'SELECT * FROM validar WHERE codigo=\'' . $_GET['v'] . '\'';
	

	$rs = mysql_query($consultar, $conexion);
	
	echo "<br>" . $consultar . "<br>";
	
	$fila = mysql_num_rows($rs);

	echo $fila;
	if($fila > 0){
		echo "Usuario Registrado";
		$consultar = "UPDATE validar SET estatus='A' WHERE codigo='" . $_GET['v'] . "' LIMIT 1";
	

		$rs = mysql_query($consultar, $conexion);
	}
	
	

}

echo '<br><br><center><H1>Su afiliacion ha sido procesada.
			Por favor has click en el enlace que enviamos a tu correo ' . $correo . ', a fines de verificar su cuenta
			<br><br>Gracias por su tiempo</H1><br><br>
			<a href="index.html" class="btn btn-orange">Regresar a la Página Principal</a></center>';


?>

</body>
</html>
