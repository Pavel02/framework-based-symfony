<?php

require_once __DIR__ . '/../vendor/autoload.php';

use Symfony\Component\HttpFoundation\{Request, Response};

$request = Request::createFromGlobals();

$response = new Response('Goodbye!');
$response->send();