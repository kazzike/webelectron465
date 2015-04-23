<?php
require_once ('lib/nusoap.php');
$server = new soap_server ();
$server->configureWSDL ( 'Afiliacion', 'urn:Afiliacion' );
$server->wsdl->addComplexType ( "Person", "complexType", "struct", "all", "", array (
		"Cedula" => array (
				"name" => "Cedula",
				"type" => "xsd:string" 
		) 
) );
// Parametros de salida
$server->wsdl->addComplexType ( "Validacion", "complexType", "struct", "all", "", array (
		"ClienteExiste" => array (
				"name" => "ClienteExiste",
				"type" => "xsd:boolean" 
		),
		"ValidarCuenta" => array (
				"name" => "ValidarCuenta",
				"type" => "xsd:string" 
		),
		"ValidarNombre" => array (
				"name" => "ValidarNombre",
				"type" => "xsd:string" 
		),
		"Correo" => array (
				"name" => "Correo",
				"type" => "xsd:string" 
		) 
)
 );

$server->register ( 'Afiliado', // method name
array (
		'person' => 'tns:Person' 
), // input parameters
array (
		'return' => 'tns:Validacion' 
), // output parameters
'urn:Afiliacion', // namespace
'urn:Afiliacion#Afiliado', // soapaction
'rpc', // style
'encoded', // use
'Validando Afiliacion' ); // documentation




function Afiliado($persona) {
	global $server;
	$ClienteExiste = 0;
	$ValidarCuenta = '';
	$ValidarNombre = '';
	$Correo = '';		
	$conexion=mysql_connect('localhost', 'electro4_electro', 'p13=3e8lxTTB');
	if (! $conexion) {
		echo 'no se pudo conectar';
	}
	mysql_select_db ( 'electro4_webelectron', $conexion );	
	$consultar = 'SELECT * FROM afiliacion WHERE cedula=\'' . $persona['Cedula'] . '\'';	
	$rs = mysql_query ( $consultar, $conexion );	
	$fila = mysql_num_rows ( $rs );	
	if ($fila > 0) {
		$ClienteExiste = 1;
		while($afiliado = mysql_fetch_object($rs)){
			$valNom = $afiliado->pnombre . ' ' . $afiliado->snombre . ' ' . $afiliado->papellido . ' ' . $afiliado->sapellido;
			$ValidarNombre = md5($valNom);
			$Correo = $afiliado->correo;
			$ValidarCuenta = $afiliado->banco;
		}
	}	
	$msj = 'Hola, ' . $persona ['Cedula'];	
	if (isset ( $_SERVER ['REMOTE_USER'] )) {
		$msj .= '  Conectando ' . $_SERVER ['REMOTE_USER'] . '?';
	}
	
	return array (
			'ClienteExiste' => $ClienteExiste,
			'ValidarCuenta' => $ValidarCuenta,
			'ValidarNombre' => $ValidarNombre,
			'Correo' => $Correo 
	)
	;
}

$HTTP_RAW_POST_DATA = isset ( $HTTP_RAW_POST_DATA ) ? $HTTP_RAW_POST_DATA : "";

$server->service ( $HTTP_RAW_POST_DATA );


