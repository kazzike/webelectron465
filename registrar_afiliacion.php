<html lang="es">
<head>
<title>Electrón 465</title>

<meta charset="UTF-8">
<link href="css/bootstrap.css" rel='stylesheet' type='text/css'>
<link href="css/templatemo_style.css" rel='stylesheet' type='text/css'>
</head>
<body>

<?php
require_once("inc/PHPMail/class.phpmailer.php");


if (isset ( $_POST ['cedu'] )) {
	$privatekey = "6Lc4EgMTAAAAANZiORAMganplKlZdreerMw1XIBN";
	
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
			$sueldopromedio = $_POST ['suel'];
			$montovacaciones = $_POST ['mvac'];
			$montoaguinaldos = $_POST ['magu'];
			$bbmsn = $_POST ['bbms'];
			$twitter = $_POST ['twit'];
			$facebook = $_POST ['face'];
			$codigovendedor = $_POST ['cove'];
			
			$asunto = 'Afiliacion por: (' . $codigovendedor . ')';
			
			$tabla = '<table>
			<tr><td>Código del Vendedor:</td><td>' . $codigovendedor . '</td></tr>
			<tr><td>Nacionalidad:</td><td>' . $nacionalidad . '</td></tr>
			<tr><td>Cédula:</td><td>' . $cedula . '</td></tr>
			<tr><td>Género:</td><td>' . $genero . '</td></tr>
			<tr><td>Primer Nombre:</td><td>' . $primernombre . '</td></tr>
			<tr><td>Segundo Nombre:</td><td>' . $segundonombre . '</td></tr>
			<tr><td>Primer Apellido:</td><td>' . $primerapellido . '</td></tr>
			<tr><td>Segundo Apellido:</td><td>' . $segundoapellido . '</td></tr>
			<tr><td>Dirección Fiscal:</td><td>' . $direccion . '</td></tr>
			<tr><td>Estado:</td><td>' . $estado . '</td></tr>
			<tr><td>Correo Eléctronico:</td><td>' . $correo . '</td></tr>
			<tr><td>Número de Casa:</td><td>' . $numerodecasa . '</td></tr>
			<tr><td>Número de Celular:</td><td>' . $numerocelular . '</td></tr>
			<tr><td>Whatsapp</td><td>' . $whatsapp . '</td></tr>
			<tr><td>Tipo de Nomina:</td><td>' . $nomina . '</td></tr>
			<tr><td>Empresa donde Labora:</td><td>' . $empresa . '</td></tr>
			<tr><td>Dirección de la Empresa:</td><td>' . $direcciondelaempresa . '</td></tr>
			<tr><td>Banco por el que cobra:</td><td>' . $banco . '</td></tr>
			<tr><td>Sueldo Promedio Mensual:</td><td>' . $sueldopromedio . '</td></tr>
			<tr><td>Monto a Cobrar en Vacaciones:</td><td>' . $montovacaciones . '</td></tr>
			<tr><td>Monto a Cobrar en Aguinaldos:</td><td>' . $montoaguinaldos . '</td></tr>
			<tr><td>Pin de Blackberry:</td><td>' . $bbmsn . '</td></tr>
			<tr><td>Usuario de Twitter:</td><td>' . $twitter . '</td></tr>
			<tr><td>Usuario de Facebook:</td><td>' . $facebook . '</td></tr>
			</table>';
			
			
			$insertar = "INSERT IGNORE INTO afiliacion (codigovendedor, nacionalidad, cedula, genero, pnombre, snombre, papellido, 
							sapellido, direccionh, estado, 
					correo, telefonocasa, numerocelular, whatsapp, nomina, empresa, direccionempresa, banco, sueldopromedio, vacaciones, 
					aguinaldos, twitter, facebook) 
					VALUES ('".$codigovendedor."','".$nacionalidad."','".$cedula."','".$genero."','".$primernombre."',
							'".$segundonombre."','".$primerapellido."','".$segundoapellido."', '".$direccion."', '".$estado."', 
							'".$correo."', '".$numerodecasa."','".$numerocelular."', '".$whatsapp."', '".$nomina."', '".$empresa."', 
							'".$direcciondelaempresa."', '".$banco."', '".$sueldopromedio."', '".$montovacaciones."','".$bbmsn."', 
									'".$twitter."', '".$facebook."')";


			$conexion=mysql_connect('localhost', 'electro4_electro', 'p13=3e8lxTTB');
			if ( !$conexion ) {echo 'no se pudo conectar';}
			mysql_select_db('electro4_webelectron', $conexion);
			mysql_query($insertar);
			//echo $insertar;

			
			$md5correo = md5($correo);			
			$tiempo = date("Y/m/d");
			
			
			$insertar = "INSERT IGNORE INTO validar (correo, codigo, estatus) VALUES ('$correo','$md5correo','P')";
		//echo "<br><br>" . $insertar;
			mysql_query($insertar);
			
			//Enviando correo al cliente
			$ruta = "Sigue el siguiente enlace <a href='http://electron465.com/verificar.php?v=$md5correo&c=$correo&t=sis-electron'>Verificar Correo electronico</a>";


	$mail = new PHPMailer();

	$body                ='<body style="margin: 10px;">Prueba de Envio<br /></body>';//file_get_contents('');
	    //$body                = preg_replace('/[\]/','',$body);        
	$mail->IsSMTP(); // telling the class to use SMTP
	    
	$mail->SMTPDebug  = 1;
	$mail->Host          = "smtp.gmail.com";
	$mail->SMTPSecure = "tls";     
	$mail->SMTPAuth      = true;                  // enable SMTP authentication
	$mail->SMTPKeepAlive = true;                  // SMTP connection will not close after each email sent
	    
	$mail->Port          = 587;    
	$mail->Username      = "soporteelectron465@gmail.com"; // SMTP account username
	$mail->Password      = "soporte8759";        // SMTP account password

	$mail->SetFrom('soporteelectron465@gmail.com', 'Departamento de Afiliacion al Cliente');
	$mail->AddReplyTo('soporteelectron465@gmail.com', 'Solicitud Afiliacion');
	$mail->Subject = 'Certificacion Cuenta Electron 465';    
	    
	$cuerpo = $ruta;
	
	$mail->AltBody    = "Texto Alternativo"; // optional, comment out and test
	$mail->MsgHTML($cuerpo);
	$address = $correo;
	$name = $primernombre . " " . $primerapellido;
	$mail->AddAddress($address, $name);





			
			echo '<br><br><center><H1>Su afiliacion ha sido procesada.
							Por favor has click en el enlace que enviamos a tu correo ' . $correo . ', a fines de verificar su cuenta
							<br><br>Gracias por su tiempo</H1><br><br>
					<a href="index.html" class="btn btn-orange">Regresar a la Página Principal</a></center>';
			if(!$mail->Send()) {
	  return "Error al enviar: " . $mail->ErrorInfo;
	} else {
	  return "Mensaje enviado a:  " .  $address . "!";
	}


} else {
	header ( 'Location: index.html' );
}

?>
</body>







</html>
