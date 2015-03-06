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
	
	
		if ($resp->is_valid) {			
			$nacionalidad = $_POST ['naci'];
			$cedula = $_POST ['cedu'];
			$genero = $_POST ['gene'];
			$primernombre = $_POST ['pnom'];
			$segundonombre = $_POST ['snom'];
			$primerapellido = $_POST ['pape'];
			$segundoapellido = $_POST ['sape'];
			$direccion = $_POST ['dire'];
			$estado = $_POST ['esta'];
			$ciudad = $_POST ['ciud'];
			$correo = $_POST ['mail'];
			$numerodecasa = $_POST ['ncas'];
			$numerocelular = $_POST ['ncel'];
			$whatsapp = $_POST ['wazz'];
			$nomina = $_POST ['tnom'];
			$empresa = $_POST ['empr'];
			$direcciondelaempresa = $_POST ['demp'];
			$banco = $_POST ['banc'];
			$montovacaciones = $_POST ['mvac'];
			$montoaguinaldos = $_POST ['magu'];
			$bbmsn = $_POST ['bbms'];
			$twitter = $_POST ['twit'];
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
			<tr><td>Nacionalidad:</td><td>' . $nacionalidad . '</td></tr>
			<tr><td>Cédula:</td><td>' . $cedula . '</td></tr>
			<tr><td>Género:</td><td>' . $genero . '</td></tr>
			<tr><td>Primer Nombre:</td><td>' . $primernombre . '</td></tr>
			<tr><td>Segundo Nombre:</td><td>' . $segundonombre . '</td></tr>
			<tr><td>Primer Apellido:</td><td>' . $primerapellido . '</td></tr>
			<tr><td>Segundo Apellido:</td><td>' . $segundoapellido . '</td></tr>
			<tr><td>Dirección Habitación:</td><td>' . $direccion . '</td></tr>
			<tr><td>Estado:</td><td>' . $estado . '</td></tr>
			<tr><td>Correo Eléctronico:</td><td>' . $correo . '</td></tr>
			<tr><td>Número de Casa:</td><td>' . $numerodecasa . '</td></tr>
			<tr><td>Número de Celular:</td><td>' . $numerocelular . '</td></tr>
			<tr><td>Whatsapp</td><td>' . $whatsapp . '</td></tr>
			<tr><td>Tipo de Nomina:</td><td>' . $nomina . '</td></tr>
			<tr><td>Empresa donde Labora:</td><td>' . $empresa . '</td></tr>
			<tr><td>Dirección de la Empresa:</td><td>' . $direcciondelaempresa . '</td></tr>
			<tr><td>Banco por el que cobra:</td><td>' . $banco . '</td></tr>
			<tr><td>Monto a Cobrar en Vacaciones:</td><td>' . $montovacaciones . '</td></tr>
			<tr><td>Monto a Cobrar en Aguinaldos:</td><td>' . $montoaguinaldos . '</td></tr>
			<tr><td>Pin de Blackberry:</td><td>' . $bbmsn . '</td></tr>
			<tr><td>Usuario de Twitter:</td><td>' . $twitter . '</td></tr>
			<tr><td>Tipo de Moto:</td><td>' . $tipodemoto . '</td></tr>
			<tr><td>Caja de Velocidades:</td><td>' . $cajavelocidades . '</td></tr>
			<tr><td>Monto Solicitado:</td><td>' . $monto . '</td></tr>
			<tr><td>Artículo:</td><td>' . $articulo . '</td></tr>
			</table>';
			
			$to = 'electron465empresa@gmail.com';
			$subject = $asunto;
			$headers = "MIME-Version: 1.0" . "\r\n";
			$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
			$headers .= 'From: <' . $correo . '>' . "\r\n";
			$headers .= 'Cc: electronbackup@gmail.com' . "\r\n";
			
			mail ( $to, $subject, $tabla, $headers );
			echo '<br><br><center><H1>Su solicitud ha sido enviada, nos comunicaremos con usted a la brevedad posible.<br><br>Gracias por su tiempo</H1><br><br>
					<a href="index.html" class="btn btn-orange">Regresar a la Página Principal</a></center>';
		
	}
} else {
	header ( 'Location: index.html' );
}

?>
</body>
</html>
