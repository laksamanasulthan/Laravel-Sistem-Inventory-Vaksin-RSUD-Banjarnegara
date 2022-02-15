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
	$response =  $client->request('POST', '/api/apidbdua', [
		'query' => [
			'namavaksin' => $_POST['vak'],
            'distributor' => $_POST['dis'],
			'targetpasien' => $_POST['pasien'],
            'stokpembelian' => $_POST['stok'],
            'petunjuk' => $_POST['peta'],
            'biayapengadaan' => $_POST['cost']

		]
	]);
}
catch (ClientException $e) {
	header('location:pass_salah.php');
}


if ($response == TRUE) {
	header('location:dashboard2.php');
} 



?>