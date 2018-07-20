<?php

use Symfony\Component\Routing;
//use Symfony\Component\HttpFoundation\Response;

function is_leap_year($year = null) {
    if (null === $year) {
        $year = date('Y');
    }

    return 0 === $year % 400 || (0 === $year % 4 && 0 !== $year % 100);
}

$routes = new Routing\RouteCollection();
$routes->add('leap_year', new Routing\Route('/is_leap_year/{year}', [
    'year' => null,
    '_controller' => 'Controllers\LeapYearController::indexAction'
]));

$routes->add('hello', new Routing\Route('/hello/{name}', ['name' => 'World', '_controller' => 'render_template']));
$routes->add('bye', new Routing\Route('/bye', ['_controller' => 'render_template']));

return $routes;