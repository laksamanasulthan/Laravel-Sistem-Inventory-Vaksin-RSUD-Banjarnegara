<?php

require __DIR__ . '/vendor/autoload.php';

use GuzzleHttp\Client;
use GuzzleHttp\Psr7;
use GuzzleHttp\Exception\ClientException;


$client = new Client([
	'base_uri' => 'http://127.0.0.1:8001',
	'timeout' => 5
]);


try {
	$response =  $client->request('POST', '/api/login', [
		'form_params' => [
			'email' => $_POST['email'],
			'password' => $_POST['password']
		]
	]);
}
catch (ClientException $e) {
	header('location:pass_salah.php');
}


if ($response == TRUE) {
	header('location:dashboard.php');
} 

// else{

// }
// $body = $response->getBody();
// var_dump($response);
// header('location:dashboard.php');

?>