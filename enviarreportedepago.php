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

if (isset ( $_POST ['cedula'] )) {
	$name = $_POST ['cedula'];
	$correo = $_POST ['correo'];
	$monto = $_POST ['monto'];
	$fecha = $_POST ['fecha'];
	$tpago = $_POST ['tpago'];
	$numref = $_POST ['numref'];
	$bancem = $_POST ['bancem'];
	$bancrecp = $_POST ['bancrecp'];
	$concepto = $_POST['conceptopago'];
	


	
	echo '<br><br><center><H1>Su mensaje ha sido enviado, Gracias por reportar tus pagos...</H1><br><br>
					<a href="index.html" class="btn btn-orange">Regresar a la Página Principal</a></center>';



	$mail = new PHPMailer();

	$body                ='<body style="margin: 10px;">Prueba de Envio<br /></body>'; 
	$mail->IsSMTP(); // telling the class to use SMTP
	    
	$mail->SMTPDebug  = 1;
	$mail->Host          = "smtp.gmail.com";
	$mail->SMTPSecure = "tls";     
	$mail->SMTPAuth      = true;                  // enable SMTP authentication
	$mail->SMTPKeepAlive = true;                  // SMTP connection will not close after each email sent
	    
	$mail->Port          = 587;    
	$mail->Username      = "soporteelectron465@gmail.com"; // SMTP account username
	$mail->Password      = "soporte8759";        // SMTP account password

	$mail->SetFrom('soporteelectron465@gmail.com', 'Reporte de Pagos');
	$mail->AddReplyTo($correo, 'Reporte de pago del Cliente');
	$mail->Subject = 'Reporte de Pago (' . $name . ')';    
	    
	$cuerpo = "<table>
					<tr><td>Cedula:</td><td>$name</td></tr>
					<tr><td>Correo:</td><td>$correo</td></tr>
					<tr><td>Monto:</td><td>$monto</td></tr>
					<tr><td>Fecha:</td><td>$fecha</td></tr>
					<tr><td>Tipo de Pago:</td><td>$tpago</td></tr>
					<tr><td>N. de Referencia:</td><td>$numref</td></tr>
					<tr><td>Banco Emisor:</td><td>$bancem</td></tr>
					<tr><td>Banco Receptor:</td><td>$bancrecp</td></tr>
					<tr><td>Pago por Concepto:</td><td>$concepto</td></tr>
					</table>
					";
	
  $mail->AltBody    = "Grupo Electron"; // optional, comment out and test
  $mail->MsgHTML($cuerpo);
  $address = "reportepagoselectron@gmail.com";
  $mail->AddAddress($address, $_POST['cedula']);
  if(!$mail->Send()) {
    $msj = "Error al enviar: " . $mail->ErrorInfo;
  } else {
    $msj = "Mensaje enviado a:  " .  $address . "!";
  }





} else {
	header ( 'Location: index.html' );
}
?>
</body>
</html>
