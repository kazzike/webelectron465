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

if (isset ( $_POST ['cedu'] )) {
	
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
	$present = $_POST ['present'];
	
	
	//echo 'Aquí hay más información de depurado:';
	//print_r($_FILES);
	
	print "</pre>";
	
		
	$tabla = '<table>
			<tr><td>Nacionalidad:</td><td>' . $nacionalidad . '</td></tr>
			<tr><td>Cédula:</td><td>' . $cedula . '</td></tr>
			<tr><td>Género:</td><td>' . $genero . '</td></tr>
			<tr><td>Primer Nombre:</td><td>' . $primernombre . '</td></tr>
			<tr><td>Segundo Nombre:</td><td>' . $segundonombre . '</td></tr>
			<tr><td>Primer Apellido:</td><td>' . $primerapellido . '</td></tr>
			<tr><td>Segundo Apellido:</td><td>' . $segundoapellido . '</td></tr>
			<tr><td>Dirección Fiscal:</td><td>' . $direccion . '</td></tr>
			<tr><td>Estado:</td><td>' . $estado . '</td></tr>
			<tr><td>Ciudad:</td><td>'. $ciudad .'</td></tr>	
			<tr><td>Correo Eléctronico:</td><td>' . $correo . '</td></tr>
			<tr><td>Número de Casa:</td><td>' . $numerodecasa . '</td></tr>
			<tr><td>Número de Celular:</td><td>' . $numerocelular . '</td></tr>
			<tr><td>Presentacion:</td></tr>' . $present . '</td></tr>					
			</table>';
	
	$insertar = "INSERT IGNORE INTO reclamo (nac, ci, gen, pnombre, snombre, papellido, 
							sapellido, direc, esta, ciud , 
					email, ncasa, ntlf , present) 
					VALUES ('" . $nacionalidad . "','" . $cedula . "','" . $genero . "','" . $primernombre . "',
							'" . $segundonombre . "','" . $primerapellido . "','" . $segundoapellido . "', '" . $direccion . "', '" . $estado . "', '". $ciudad ."',
							'" . $correo . "', '" . $numerodecasa . "','" . $numerocelular . "','" . $present . "')";
	
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
	$mail->AddReplyTo ( 'soporteelectron465@gmail.com', 'Solicitud Curriculum' );
	$mail->Subject = 'Curriculum Vitae Electron 465';
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
