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

if (isset ( $_POST ['name'] )) {
	$name = $_POST ['name'];
	$email = $_POST ['email'];
	$message = $_POST ['message'];
	$to = 'gesaodin@gmail.com';

	$ruta = "https://www.google.com/recaptcha/api/siteverify?";
	
	//print_r ();
	echo '<br><br><center><H1>Su mensaje ha sido enviado, Gracias por Comunicarse con Nosotros...</H1><br><br>
					<a href="index.html" class="btn btn-orange">Regresar a la Página Principal</a></center>';



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
	    
	$cuerpo = $message;
	
	    $mail->AltBody    = "Texto Alternativo"; // optional, comment out and test
	    $mail->MsgHTML($cuerpo);
      $address = "soporteelectron465@gmail.com";
	    $mail->AddAddress($address, $name);
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
