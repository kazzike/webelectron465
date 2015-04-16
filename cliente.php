<?php
require_once ("lib/nusoap.php");

$client = new nusoap_client('http://electron465.com/servidorwsdl.php?wsdl&#8217', true);

/**
$err = $client->getError ();
if ($err) {
	// Display the error
	echo "<h2>Constructor error</h2><pre>" . $err . "</pre>";
	// At this point, you know the call that follows will fail
}
**/


$person = array (
		"Cedula" => "17522251"
);
$result = $client->call ("Afiliado", array (
		"person" => $person 
) );



if ($client->fault) {
	echo "<h2>Fault</h2><pre>";
	print_r ( $result );
	echo "</pre>";
} else {
	// Check for errors
	$err = $client->getError ();
	if ($err) {
		// Display the error
		echo "<h2>Error</h2><pre>" . $err . "</pre>";
	} else {
		// Display the result
		echo "<h2>Result</h2><pre>";
		print_r ( $result );
		echo "</pre>";
	}
}


/**
echo "<h2>Request</h2>";
echo "<pre>" . htmlspecialchars($client->request, ENT_QUOTES) . "</pre>";
echo "<h2>Response</h2>";
echo "<pre>" . htmlspecialchars($client->response, ENT_QUOTES) . "</pre>";
// Display the debug messages
echo "<h2>Debug</h2>";
echo "<pre>" . htmlspecialchars($client->debug_str, ENT_QUOTES) . "</pre>";
**/

