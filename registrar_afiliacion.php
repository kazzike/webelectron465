<html lang="es">
<head>
<title>Electrón 465</title>

<meta charset="UTF-8">
<link href="css/bootstrap.css" rel='stylesheet' type='text/css'>
<link href="css/templatemo_style.css" rel='stylesheet' type='text/css'>
</head>
<body>

<?php


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
			
			
			$insertar = "insert into solicitud (codigovendedor, nacionalidad, cedula, genero, pnombre, snombre, papellido, sapellido, direccionh, estado, 
					correo, telefonocasa, numerocelular, whatsapp, nomina, empresa, direccionempresa, banco, sueldopromedio, vacaciones, 
					aguinaldos, twitter, facebook) 
					values ('".$codigovendedor."','".$nacionalidad."','".$cedula."','".$genero."','".$primernombre."',
							'".$segundonombre."','".$primerapellido."','".$segundoapellido."', '".$direccion."', '".$estado."', 
							'".$correo."', '".$numerodecasa."','".$numerocelular."', '".$whatsapp."', '".$nomina."', '".$empresa."', 
							'".$direcciondelaempresa."', '".$banco."', '".$sueldopromedio."', '".$montovacaciones."','".$bbmsn."', 
									'".$twitter."', '".$facebook."')";
			
			$conexion=mysql_connect('localhost', 'electro4_electro', 'p13=3e8lxTTB');
			if ( !$conexion ) {echo 'no se pudo conectar';}
			mysql_select_db('electro4_webelectron', $conexion);
			mysql_query($insertar);
			$md5correo = md5($correo);
			$tiempo = date("Y/m/d");
			$insertar = "INSERT INTO validar (correo, codigo, esttus, fecha) VALUES ('$correo','$md5correo','P','$tiempo')";
			mysql_query($insertar);
			
			//Enviando correo interno
			$to = 'electron465empresa@gmail.com';
			$subject = $asunto;
			$headers = "MIME-Version: 1.0" . "\r\n";
			$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
			$headers .= 'From: <' . $correo . '>' . "\r\n";
			$headers .= 'Cc: electronbackup@gmail.com' . "\r\n";			
			mail ( $to, $subject, $tabla, $headers );
			
			//Enviando correo al cliente
			$to = $correo;
			$subject = "Certificaci&oacute;n Cuenta Electr&oacute;n 465";
			$headers = "MIME-Version: 1.0" . "\r\n";
			$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
			$headers .= 'From: <' . $correo . '>' . "\r\n";
			//$headers .= 'Cc: electronbackup@gmail.com' . "\r\n";

			$ruta = "Sigue el siguiente enlace <a href='http://electron465.com/verificar.php?v=$md5correo'>Verificar Correo electronico</a>";
			mail ( $to, $subject, $tabla, $headers );
			
			
			echo '<br><br><center><H1>Su solicitud ha sido enviada, nos comunicaremos con usted a la brevedad posible.<br><br>Gracias por su tiempo</H1><br><br>
					<a href="index.html" class="btn btn-orange">Regresar a la Página Principal</a></center>';
		

} else {
	header ( 'Location: index.html' );
}

?>
</body>







</html>
