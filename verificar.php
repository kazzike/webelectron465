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

	

	
	$conexion=mysql_connect('localhost', 'electro4_electro', 'p13=3e8lxTTB');
			if ( !$conexion ) {echo 'no se pudo conectar';}
							mysql_select_db('electro4_webelectron', $conexion);


	$consultar = 'SELECT * FROM validar WHERE codigo=\'' . $_GET['v'] . '\'';
	

	$rs = mysql_query($consultar, $conexion);
	
	
	$fila = mysql_num_rows($rs);


	if($fila > 0){

	 	$mail = new PHPMailer();    
		$mail->IsSMTP(); // telling the class to use SMTP
	    
		$mail->SMTPDebug  = 1;
		$mail->Host          = "smtp.gmail.com";
		$mail->SMTPSecure = "tls";     
		$mail->SMTPAuth      = true;                  // enable SMTP authentication
		$mail->SMTPKeepAlive = true;                  // SMTP connection will not close after each email sent
	    
		$mail->Port          = 587;    
		$mail->Username      = "soporteelectron465@gmail.com"; // SMTP account username
		$mail->Password      = "soporte8759";        // SMTP account password

		$mail->SetFrom('soporteelectron465@gmail.com', 'Departamento de Atencion');
		$mail->AddReplyTo('electron465empresa@gmail.com', 'Afiliacion');
		$mail->Subject = 'Grupo Electron (Atencion al Cliente)';    
	    
		$cuerpo = "				
			<br>
			Saludos estimado cliente y próximo afiliado de nuestra gran familia Electrón.
			<br><br>
			En Electrón 465 trabajamos para construir relaciones duraderas con nuestros clientes y 
			aportar el máximo valor posible, tanto a nuestros clientes como a la sociedad. El objetivo que 
			nos hemos planteado es que en cada uno de los contactos que mantenemos con nuestros clientes se 
			les transmita una experiencia que haga la diferencia para una relacion duradera, y de compromiso, 
			mejorando e innovando cada día.
			<br><br>
			Para continuar con el proceso de afiliación debe consignar los siguientes requisitos:
			<br><br>
				1.- Copia de la Cédula de Identidad Vigente.<br>
				2.- Copia de Rif Actualizado.<br>
				3.- Original del Recibo de Pago.<br>
				4.- Copia de la Libreta Actualizada (Donde se pueda visualizar el número de cuenta).<br>
				5.- Original Certificación de Cuenta Bancaria (Estado Cuenta Firmado por el Banco). <br>
				6.- Original de la Constancia de Trabajo Con Sello Húmedo o Seco Vigente.<br>
				7.- Contrato de Servicios ( Firmarlo y colocar huella dactilar del pulgar derecho e izquierdo) 
				Puede descargar el Documento en PDF a traves del siguiente enlace<a href='http://www.electron465.com/afiliacion/afiliacion.pdf'>Contrato Afiliacion</a>
				<br>
				Todos estos recaudos deben colocarse en una carpeta amarilla tamaño oficio, sin grapas, tachaduras, 
				enmiendas, u orificios y dicha carpeta debe ir en un sobre manila tamaño oficio para ser enviado a 
				traves de MRW a la Oficina Ubicada en el estado Merida Código Agencia: 1401000 Dirección: AV. PASEO DE LA FERIA, EDIF. RES. EL PASEO, 
				P,B. LOCAL MRW a nombre de GRUPO ELECTRON 465 C.A. RIF J-29837846-8 Teléfono: 0274 - 251 22 60
				<br><br>
				Una vez recibidos los recaudos, nos comunicaremos con usted via correo electronico 
				para asignarle su usuario y contraseña para acceder al sistema de solicitudes.<br><br>";
			
	  $mail->AltBody    = "Texto Alternativo"; // optional, comment out and test
	  $mail->MsgHTML($cuerpo);
		$address = $_GET['c'];	
	  $mail->AddAddress($address, "Afiliacion Electron 465");
	  if(!$mail->Send()) {
	  	$msj = "Error al enviar: " . $mail->ErrorInfo;
	  } else {
	    $msj = "Mensaje enviado a:  " .  $address . "!";
	  }

		$consultar = "UPDATE validar SET estatus='A' WHERE codigo='" . $_GET['v'] . "' LIMIT 1";
		mysql_query($consultar);

		echo '<br><br><center><H1>Su afiliacion ha sido procesada.
			Por favor haz click en el enlace que enviamos a tu correo ' . $_GET['c'] . ', a fines de verificar su correo electronico
			<br><br>Gracias por tu tiempo</H1><br><br>
			<a href="index.html" class="btn btn-orange">Regresar a la Página Principal</a></center>';

	}else{
			echo '<br><br><center><H1>Su afiliacion no ha sido procesada.
						Por favor comuniquese con la empresa o vuelva realizar el proceso de afiliacion <br><br>
			<a href="index.html" class="btn btn-orange">Regresar a la Página Principal</a></center>';
	}
}
?>

</body>
</html>
