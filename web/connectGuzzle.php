<?php
require_once 'vendor/autoload.php';

use Guzzle\Http\Client;
use Guzzle\Http\EntityBody;
use Guzzle\Http\Message\Request;
use Guzzle\Http\Message\Response;

if (isset($_SESSION['access_token'])) {
    $headers = [
        'headers' => [
            'Accept' => 'application/json',
            'Content-Type' => 'application/json',
            'Authorization' => 'Bearer ' . $_SESSION['access_token']
        ]
    ];
}