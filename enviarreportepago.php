<html lang="es">
<head>
<title>Electrón 465</title>

<meta charset="UTF-8">
<link href="css/bootstrap.css" rel='stylesheet' type='text/css'>
<link href="css/templatemo_style.css" rel='stylesheet' type='text/css'>
</head>
<body>

<?php


if (isset ( $_POST ['cedu'] )) {
	$privatekey = "6Lc4EgMTAAAAANZiORAMganplKlZdreerMw1XIBN";
	
			$cedula = $_POST ['cedu'];
			$correo = $_POST ['mail'];
			$monto = $_POST ['mont'];
			$fecha = $_POST ['fech'];
			$tpago = $_POST ['tpag'];
			$numref = $_POST ['numrf'];
			$bancem = $_POST ['bancm'];
			$bancrcp = $_POST ['bancrc'];
			$archpag = $_POST ['archpg'];
			if ($modelo == 'moto') {
				$asunto = 'Solicitud por: (' . $tipodemoto . ' ' . $cajavelocidades . ')';
			} elseif ($modelo == 'articulo') {
				$asunto = 'Solicitud por: (' . $articulo . ' )';
			} else {
				$asunto = 'Solicitud por: (' . $monto . ' )';
			}
			
			$tabla = '<table>
			<tr><td>Cedula:</td><td>' . $cedula . '</td></tr>
			<tr><td>Correo:</td><td>' . $correo . '</td></tr>
			<tr><td>Monto:</td><td>' . $monto . '</td></tr>
			<tr><td>Fecha:</td><td>' . $fecha . '</td></tr>
			<tr><td>Tipo de pago:</td><td>' . $tpago . '</td></tr>
			<tr><td>Num Referencia:</td><td>' . $numref . '</td></tr>
			<tr><td>Banco emisor:</td><td>' . $bancem . '</td></tr>
			<tr><td>Banco receptor:</td><td>' . $bancrcp . '</td></tr>
			<tr><td>archivo pago:</td><td>' . $archpag . '</td></tr>
			</table>';
			echo $tabla;
			

			$insertar = "insert into solicitud (cedula, correo, monto, monto, fecha, tpago, numref, bancem, banrcp, archpag) values ('".$cedula."','".$correo."','".$monto."','".$fecha."','".$tpago."','".$numref."','".$bancem."','".$bancrcp."', '".$archpag."')";
			
			$conexion=mysql_connect('localhost', 'electro4_webelectron', 'p13=3e8lxTTB');
			if ( !$conexion ) {echo 'no se pudo conectar';}
			mysql_select_db('electro4_webelectron', $conexion);
			mysql_query($insertar);
			
		
			$to = 'electron465empresa@gmail.com';
			$subject = $asunto;
			$headers = "MIME-Version: 1.0" . "\r\n";
			$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
			$headers .= 'From: <' . $correo . '>' . "\r\n";
			$headers .= 'Cc: electronbackup@gmail.com' . "\r\n";
			
			mail ( $to, $subject, $tabla, $headers );
			echo '<br><br><center><H1>Su solicitud ha sido enviada, nos comunicaremos con usted a la brevedad posible.<br><br>Gracias por su tiempo</H1><br><br>
					<a href="index.html" class="btn btn-orange">Regresar a la Página Principal</a></center>';
		

} else {
	header ( 'Location: index.html' );
}

?>
</body>







</html>
