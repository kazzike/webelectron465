<?php
if(!isset($_GET['v'])){
	$conexion=mysql_connect('localhost', 'electro4_electro', 'p13=3e8lxTTB');
	if ( !$conexion ) {echo 'no se pudo conectar';}
	mysql_select_db('webelectron465', $conexion);
	$consultar = 'SELECT * FROM validar WHERE codigo=' . $_GET['v'];
	$rs = mysql_query($consultar);

	while($fila = mysql_fecht_object($rs)){
		
	}


}
