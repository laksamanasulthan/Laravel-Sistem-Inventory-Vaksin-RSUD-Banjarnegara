<?php

require __DIR__ . '/vendor/autoload.php';

use GuzzleHttp\Client;
use GuzzleHttp\Psr7;
use GuzzleHttp\Exception\ClientException;


$client = new Client([
	'base_uri' => 'http://127.0.0.1:8001',
	'timeout' => 5
]);

$del = $_GET['del'];

try {
	$response =  $client->request('DELETE', '/api/apidbdua/'.$del.'');
}
catch (ClientException $e) {
	header('location:pass_salah.php');
}


if ($response == TRUE) {
	header('location:dashboard2.php');
} 



?>