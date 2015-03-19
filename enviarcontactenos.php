<html lang="es">
<head>
<title>Electrón 465</title>

<meta charset="UTF-8">
<link href="css/bootstrap.css" rel='stylesheet' type='text/css'>
<link href="css/templatemo_style.css" rel='stylesheet' type='text/css'>
</head>
<body>
<?php
if (isset ( $_POST ['name'] )) {
	$name = $_POST ['name'];
	$email = $_POST ['email'];
	$message = $_POST ['message'];
	$to = 'gesaodin@gmail.com';
	$subject = 'Contacto de la Página Web';
	$headers = "MIME-Version: 1.0" . "\r\n";
	$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
	$headers .= 'From: <' . $email . '>' . "\r\n";
	$headers .= 'Cc: electronbackup@gmail.com' . "\r\n";
	mail ( $to, $subject, $message, $headers );
	$ruta = "https://www.google.com/recaptcha/api/siteverify?";
	
	print_r ();
	echo '<br><br><center><H1>Su mensaje ha sido enviado, Gracias por Comunicarse con Nosotros...</H1><br><br>
		<a href="index.html" class="btn btn-orange">Regresar a la Página Principal</a></center>';
} else {
	header ( 'Location: index.html' );
}
?>
</body>
</html>