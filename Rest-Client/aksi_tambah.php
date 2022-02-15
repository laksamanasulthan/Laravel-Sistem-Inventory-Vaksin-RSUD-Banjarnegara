<?php

require __DIR__ . '/vendor/autoload.php';

use GuzzleHttp\Client;
use GuzzleHttp\Psr7;
use GuzzleHttp\Exception\ClientException;


$client = new Client([
	'base_uri' => 'http://127.0.0.1:8000',
	'timeout' => 5
]);


try {
	$response =  $client->request('POST', '/api/apidbsatu', [
		'query' => [
			'pengembangvaksin' => $_POST['company'],
            'approval' => $_POST['fda'],
			'clinicalprtg' => $_POST['clinical'],
            'dosis' => $_POST['dose'],
            'rekomendasi' => $_POST['rec'],
            'efeksamping' => $_POST['efek'],
			'peringatan' => $_POST['warn']

		]
	]);
}
catch (ClientException $e) {
	header('location:pass_salah.php');
}


if ($response == TRUE) {
	header('location:dashboard.php');
} 



?>