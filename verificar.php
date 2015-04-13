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



if(isset($_GET['v'])){

	echo "iniciando";

	
	$conexion=mysql_connect('localhost', 'electro4_electro', 'p13=3e8lxTTB');
			if ( !$conexion ) {echo 'no se pudo conectar';}
							mysql_select_db('electro4_webelectron', $conexion);


	$consultar = 'SELECT * FROM validar WHERE codigo=\'' . $_GET['v'] . '\'';
	

	$rs = mysql_query($consultar, $conexion);
	
	
	$fila = mysql_num_rows($rs);

	echo $fila;
	if($fila > 0){

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

	$mail->SetFrom('soporteelectron465@gmail.com', 'Departamento de Atenci&oacute;n al Cliente');
	$mail->AddReplyTo($email, 'Solicitud Cliente');
	$mail->Subject = 'Grupo Electron (Atencion al Cliente)';    
	    
	$cuerpo = "Debe imprimir el documento adjunto y consignar los siguientes requisitos
					<br><br>
					Cedula...
					<br><br>
					<a href='https://drive.google.com/file/d/0B2pY6Lv3m6iqRUVrenpya1VlejQ/view?usp=sharing'>Descargar Terminos de Contrato</a>
					";
			
	    $mail->AltBody    = "Texto Alternativo"; // optional, comment out and test
	    $mail->MsgHTML($cuerpo);
			$address = "soporteelectron465@gmail.com";
			
	    $mail->AddAddress($address, $name);
	    if(!$mail->Send()) {
	      return "Error al enviar: " . $mail->ErrorInfo;
	    } else {
	      return "Mensaje enviado a:  " .  $address . "!";
	    }









		$consultar = "UPDATE validar SET estatus='A' WHERE codigo='" . $_GET['v'] . "' LIMIT 1";
		echo '<br><br><center><H1>Su afiliacion ha sido procesada.
			Por favor has click en el enlace que enviamos a tu correo ' . $correo . ', a fines de verificar su cuenta
			<br><br>Gracias por su tiempo</H1><br><br>
			<a href="index.html" class="btn btn-orange">Regresar a la Página Principal</a></center>';

	}else{
			echo '<br><br><center><H1>Su afiliacion no ha sido procesada.
						Por favor comuniquese con la empresa o vuelva hacer la afiliacion <br><br>
			<a href="index.html" class="btn btn-orange">Regresar a la Página Principal</a></center>';
	}
	
	

}



?>

</body>
</html>
