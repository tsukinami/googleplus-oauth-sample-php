<?php

session_start();

require_once 'vendor/autoload.php';

$client = new Google_Client();
$client->setAuthConfigFile('client_secret.json');
$client->authenticate($_GET['code']);
$access_token = $client->getAccessToken();
print_r($access_token);

$client->setAccessToken($access_token);

$plus = new Google_Service_Plus($client);
$me = $plus->people->get('me');
print_r($me);
