<?php

session_start();

require_once 'vendor/autoload.php';

$client = new Google_Client();
$client->setAuthConfigFile('client_secret.json');
$client->setScopes(array('https://www.googleapis.com/auth/plus.me'));

$authUrl = $client->createAuthUrl();
header('Location: ' . filter_var($authUrl, FILTER_SANITIZE_URL));
