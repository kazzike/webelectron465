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
date_default_timezone_set ( 'America/Caracas' );

if (isset ( $_POST ['ced'] )) {
	
	$cedula = $_POST ['ced'];
	$correo = $_POST ['mail'];
	$codigovendedor = $_POST ['cove'];
	$tipomoto = $_POST ['tipomoto'];
	
	//echo 'Aquí hay más información de depurado:';
	//print_r($_FILES);
	
	print "</pre>";
	
		
	$tabla = '<table>
			<tr><td>Cédula:</td><td>' . $cedula . '</td></tr>
			<tr><td>Correo Eléctronico:</td><td>' . $correo . '</td></tr>
			<tr><td>Número de Casa:</td><td>' . $codigovendedor . '</td></tr>
			<tr><td>Número de Celular:</td><td>' . $tipomoto . '</td></tr>					
			</table>';
	
	$insertar = "INSERT IGNORE INTO solicitudmoto (ced, mail, cove, tipomoto) 
					VALUES ('" . $cedula . "', '" . $correo . "', '" . $codigovendedor . "','" . $tipomoto . "')";
	
	//echo $insertar; 
	//$conexion = mysql_connect ( 'localhost', 'root', '' );
	$conexion = mysql_connect ( 'localhost', 'electro4_electro', 'p13=3e8lxTTB' );
	if (! $conexion) {
		echo 'no se pudo conectar';
	}
	mysql_select_db ( 'electro4_webelectron', $conexion );
	//mysql_select_db ( 'webelectron', $conexion );
	mysql_query ( $insertar );
	// echo $insertar;
	
	$md5correo = md5 ( $correo );
	$tiempo = date ( "Y/m/d" );
	
	// Enviando correo al cliente
	$ruta = "Bienvenido(a).
             <br><br>
			La Familia Electron le  agradece su interés por ingresar a nuestra base de datos, la cual le ofrece la posibilidad de ser considerado(a) para 
			formar parte del desarrollo en cualquiera de nuestras empresas u oficinas.
		    <br><br>
			Recuerde que es muy importante que revise periódicamente su buzón electrónico de mensajes, pues a través de esa vía nos pondremos en contacto
			con usted en caso de que deseemos concretar una relación mas cercana. 			
			";
	
	$mail = new PHPMailer ();
	
	$body = '<body style="margin: 10px;">Prueba de Envio<br /></body>'; // file_get_contents('');
	                                                                    // $body = preg_replace('/[\]/','',$body);
	$mail->IsSMTP (); // telling the class to use SMTP
	
	$mail->SMTPDebug = 1;
	$mail->Host = "smtp.gmail.com";
	$mail->SMTPSecure = "tls";
	$mail->SMTPAuth = true; // enable SMTP authentication $mail->SMTPKeepAlive = true; // SMTP connection will not close after each email sent
	
	$mail->Port = 587;
	$mail->Username = "soporteelectron465@gmail.com"; // SMTP account username
	$mail->Password = "soporte8759"; // SMTP account password
	$mail->SetFrom ( 'soporteelectron465@gmail.com', 'Departamento de RRHH' );
	$cuerpo = '<br>' . $ruta;
	$mail->AltBody = "Texto Alternativo"; // optional, comment out and test
	$mail->MsgHTML ( $cuerpo );
	$address = $correo;
	$name = $primernombre . " " . $primerapellido;
	$mail->AddAddress ( $address, $name );
	
	echo '<br><br><center><H1>Su registro ha sido procesado con exito.
							<br><br>Gracias por tu tiempo</H1><br><br>
					<a href="index.html" class="btn btn-orange">Regresar a la Página Principal</a></center>';
	if (! $mail->Send ()) {
		return "Error al enviar: " . $mail->ErrorInfo;
	} else {
		return "Mensaje enviado a:  " . $address . "!";
	}
	
	$mail->SetFrom ( 'soporteelectron465@gmail.com', 'RRHH' );
	$mail->AddReplyTo ( 'soporteelectron465@gmail.com', 'Solicitud de Registro' );
	$mail->Subject = 'Registro ( ' . $cedula . ' )';
	$cuerpo = "<table>
				<tr><td>Cedula del Cliente: <td><td>" . $cedula . "</td></tr>
				<tr><td>Correo electronico: <td><td>" . $correo . "</td></tr>
			   </table>
				";
	$mail->AltBody = "Texto Alternativo"; // optional, comment out and test
	$mail->MsgHTML ( $cuerpo );
	$address = $correo;
	$name = $primernombre . " " . $primerapellido;
	$mail->AddAddress ( 'soporteelectron465@gmail.com', $name );
} else {
	header ( 'Location: index.html' );
}

?>
</body>



</html>

