<html lang="es">
<head>
<title>Electrón 465</title>

<meta charset="UTF-8">
<link href="css/bootstrap.css" rel='stylesheet' type='text/css'>
<link href="css/templatemo_style.css" rel='stylesheet' type='text/css'>
</head>
<body>

<?php
require_once ("inc/PHPMail/class.phpmailer.php");

if (isset ( $_POST ['mail'] )) {
	$nom = "";
	$tel = "";
	$cel = "";
	$est = "";
	$emp = "";
	$ban = "";
	$sul = "";
	$vac = "";
	$conexion = mysql_connect ( 'localhost', 'electro4_electro', 'p13=3e8lxTTB' );
	if (! $conexion) {
		echo 'no se pudo conectar';
	}
	mysql_select_db ( 'electro4_webelectron', $conexion );
	
	
	$consultar = 'SELECT * FROM validar LEFT JOIN afiliacion ON validar.correo=afiliacion.correo 
					WHERE afiliacion.correo=\'' . $_POST['mail'] . '\' AND estatus = \'A\'';
	
	
	$rs = mysql_query($consultar, $conexion);
	
	
	$fila = mysql_num_rows($rs);
	
	
	
	if($fila > 0){
		
		
		while ($fil = mysql_fetch_object($rs)) {
			$nom = $fil->pnombre . ' ' . $fil->snombre  . ' ' .  $fil->papellido . ' ' . $fil->sapellido ;
			$tel = $fil->telefonocasa;
			$cel = $fil->numerocelular;
			$est = $fil->estado;
			$emp = $fil->empresa;
			$ban = $fil->banco;
			$sul = $fil->sueldopromedio;
			$vac = $fil->vacaciones;
			
		}
		//mysql_free_result($resultado);
		
		
		$privatekey = "6Lc4EgMTAAAAANZiORAMganplKlZdreerMw1XIBN";
		
		$correo = $_POST ['mail'];
		$codigovendedor = $_POST ['cove'];
		$cedula = $_POST ['ced'];		
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
			<tr><td>Cédula del Cliente:</td><td>' . $cedula . '</td></tr>
			<tr><td>Nombre Completo:</td><td>' . $nom . '</td></tr>
			<tr><td>Telefono Casa:</td><td>' . $tel . '</td></tr>
			<tr><td>Celular:</td><td>' . $cel . '</td></tr>
			<tr><td>Estado:</td><td>' . $est . '</td></tr>
			<tr><td>Empresa:</td><td>' . $emp . '</td></tr>
			<tr><td>Banco:</td><td>' . $ban . '</td></tr>
			<tr><td>Sueldo Promedio:</td><td>' . $sul . '</td></tr>
			<tr><td>Monto Vacaciones:</td><td>' . $vac . '</td></tr>	
			<tr><td>Código del Vendedor:</td><td>' . $codigovendedor . '</td></tr>				
			<tr><td>Correo Eléctronico:</td><td>' . $correo . '</td></tr>			
			<tr><td>Tipo de Moto:</td><td>' . $tipodemoto . '</td></tr>
			<tr><td>Caja de Velocidades:</td><td>' . $cajavelocidades . '</td></tr>
			<tr><td>Monto Solicitado:</td><td>' . $monto . '</td></tr>
			<tr><td>Artículo:</td><td>' . $articulo . '</td></tr>
			</table>';
		
		$insertar = "insert into solicitud (codigovendedor, correo, tipomoto, cajavelocidades, montosolicitado, articulo) values ('$codigovendedor',
			'$correo','$tipodemoto','$cajavelocidades','$monto','$articulo')";
		
		$conexion = mysql_connect ( 'localhost', 'electro4_electro', 'p13=3e8lxTTB' );
		if (! $conexion) {
			echo 'no se pudo conectar';
		}
		mysql_select_db ( 'electro4_webelectron', $conexion );
		mysql_query ( $insertar );
		
		/**
		 * //$to = 'electron465empresa@gmail.com';
		 * $to = 'gesaodin@gmail.com';
		 * $subject = $asunto;
		 * $headers = "MIME-Version: 1.0" .
		 * "\r\n";
		 * $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
		 * $headers .= 'From: <' . $correo . '>' . "\r\n";
		 * $headers .= 'Cc: electronbackup@gmail.com' . "\r\n";
		 * mail ( $to, $subject, $tabla, $headers );
		 */
		
		$mail = new PHPMailer ();
		
		$body = '<body style="margin: 10px;">Prueba de Envio<br /></body>';
		$mail->IsSMTP (); // telling the class to use SMTP
		
		$mail->SMTPDebug = 1;
		$mail->Host = "smtp.gmail.com";
		$mail->SMTPSecure = "tls";
		$mail->SMTPAuth = true; // enable SMTP authentication
		$mail->SMTPKeepAlive = true; // SMTP connection will not close after each email sent
		
		$mail->Port = 587;
		$mail->Username = "soporteelectron465@gmail.com"; // SMTP account username
		$mail->Password = "soporte8759"; // SMTP account password
		
		$mail->SetFrom ( 'soporteelectron465@gmail.com', 'Solicitud de Credito' );
		$mail->AddReplyTo ( $correo, 'Solicitud' );
		$mail->Subject = $asunto;
		
		$cuerpo = $tabla;
		
		$mail->AltBody = "Grupo Electron"; // optional, comment out and test
		$mail->MsgHTML ( $cuerpo );
		$address = "electron465empresa@gmail.com";
		
		$mail->AddAddress ( $address, $_POST ['cedula'] );
		$mail->addBcc($address);
		if (! $mail->Send ()) {
			$msj = "Error al enviar: " . $mail->ErrorInfo;
		} else {
			$msj = "Mensaje enviado a:  " . $address . "!";
		}
		$address = "solicitudeselectron@gmail.com";
		
		$mail->AddAddress ( $address, $_POST ['cedula'] );
		$mail->addBcc($address);
		if (! $mail->Send ()) {
			$msj = "Error al enviar: " . $mail->ErrorInfo;
		} else {
			$msj = "Mensaje enviado a:  " . $address . "!";
		}
		
		echo '<br><br><center><H1>Su solicitud ha sido enviada, nos comunicaremos con usted a la brevedad posible.<br><br>Gracias por su tiempo</H1><br><br>
					<a href="index.html" class="btn btn-orange">Regresar a la Página Principal</a></center>';
	}else
	{
		echo '<br><br><center><H1>Su solicitud no ha sido procesada, por favor debe realizar su afiliación</H1><br><br>
					<a href="index.html" class="btn btn-orange">Regresar a la Página Principal</a></center>';
	}
} else {
	header ( 'Location: index.html' );
}

?>
</body>







</html>
