<?php

require_once __DIR__ . '/vendor/autoload.php';

use Symfony\Component\HttpFoundation\{Request, Response};

// новый объект, основанный на текущих глобальных переменных PHP
$request = Request::createFromGlobals();

$input = $request->get('name', 'World');

$response = new  Response(printf('Hello %s', htmlspecialchars($input, ENT_QUOTES, 'UTF-8')));

$response->send();