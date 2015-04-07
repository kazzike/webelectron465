<html lang="es">
<head>
<title>Electrón 465</title>

<meta charset="UTF-8">
<link href="css/bootstrap.css" rel='stylesheet' type='text/css'>
<link href="css/templatemo_style.css" rel='stylesheet' type='text/css'>
</head>
<body>

<?php


if (isset ( $_POST ['mail'] )) {
	$privatekey = "6Lc4EgMTAAAAANZiORAMganplKlZdreerMw1XIBN";
	
			$correo = $_POST ['mail'];			
			$codigovendedor = $_POST ['cove'];
			$tipodemoto = $_POST ['tmot'];
			$cajavelocidades = $_POST ['cvel'];
			$monto = $_POST ['mont'];
			$articulo = $_POST ['arti'];
			$modelo = $_POST ['modelo'];
			if ($modelo == 'moto') {
				$asunto = 'Solicitud por: (' . $tipodemoto . ' ' . $cajavelocidades . ')';
			} elseif ($modelo == 'articulo') {
				$asunto = 'Solicitud por: (' . $articulo . ' )';
			} else {
				$asunto = 'Solicitud por: (' . $monto . ' )';
			}
			
			$tabla = '<table>
			<tr><td>Código del Vendedor:</td><td>' . $codigovendedor . '</td></tr>			
			<tr><td>Correo Eléctronico:</td><td>' . $correo . '</td></tr>			
			<tr><td>Tipo de Moto:</td><td>' . $tipodemoto . '</td></tr>
			<tr><td>Caja de Velocidades:</td><td>' . $cajavelocidades . '</td></tr>
			<tr><td>Monto Solicitado:</td><td>' . $monto . '</td></tr>
			<tr><td>Artículo:</td><td>' . $articulo . '</td></tr>
			</table>';
			
			
			$insertar = "insert into solicitud (codigovendedor, correo, tipomoto, cajavelocidades, montosolicitado, articulo) values ('$codigovendedor',
			'$correo','$tipodemoto','$cajavelocidades','$monto','$articulo')";
			
			$conexion=mysql_connect('localhost', 'electro4_electro', 'p13=3e8lxTTB');
			if ( !$conexion ) {echo 'no se pudo conectar';}
			mysql_select_db('electro4_webelectron', $conexion);
			mysql_query($insertar);
			
		
			//$to = 'electron465empresa@gmail.com';
			$to = 'gesaodin@gmail.com';
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
