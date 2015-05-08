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
			Saludos estimado cliente y próximo afiliado de nuestra gran familia Electron.
			<br><br>
			
			Para continuar con el proceso de afiliacion debe consignar los siguientes recaudos:
			<br><br>
				1.- Copia de la Cedula de Identidad Vigente.<br>
				2.- Copia de Rif Actualizado.<br>
				3.- Una (1) Foto Tipo Carnet <br>
				4.- Original del Recibo de Pago.<br>
				5.- Copia de la Libreta Actualizada (Donde se pueda visualizar el numero de cuenta).<br>
				6.- Original Certificacion de Cuenta Bancaria (Estado Cuenta Firmado por el Banco). <br>
				7.- Original de la Constancia de Trabajo donde se especifique el sueldo, con Sello Humedo o Seco Vigente.<br>
				8.- Contrato de Servicios ( Leerlo, Firmarlo y colocar huella dactilar del pulgar derecho e izquierdo) 
				Puede descargar el Documento en PDF a traves del siguiente enlace: <a href='http://www.electron465.com/afiliacion/afiliacion.pdf'>Contrato Afiliacion</a>
				<br>
				Todos estos recaudos deben colocarse en un sobre manila tamaño oficio, sin grapas, tachaduras, 
				enmiendas, u orificios y enviarlos a traves de Nuestro Casillero Gratuito en Grupo Zoom, Identificado de la siguiente manera: MRD - 381219 a Nombre de Grupo Electron 465 (debe asegurarse de identificar correctamente y legible el sobre con este codigo).
				Igualmente puede enviarlos a traves de MRW a la Oficina Ubicada en el estado Merida Codigo de Agencia: 1401000 Dirección: AV. PASEO DE LA FERIA, EDIF. RES. EL PASEO, 
				P,B. LOCAL MRW a nombre de GRUPO ELECTRON 465 C.A. RIF J-29837846-8 Teléfono: 0274 - 251 22 60
				<br>
				Una vez recibidos los recaudos, nuestros analistas de ventas procederan a revisarlos y le contactaran para proceder con su financiamiento.<br>
				<br>
				Desde este momento puedes realizar la solicitud del producto que desees, ARTICULOS VARIOS - LIBRE INVERSION - MOTOCICLETAS a traves de nuestro sitio web www.electron465.com ";

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

		echo '<br><br><center><H1>Tu correo ha sido verificado. <br>
			Ahora puedes ingresar a tu correo electronico, el sistema te ha enviado los pasos a seguir para completar el proceso.-
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
