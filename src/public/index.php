<?php
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

require '../vendor/autoload.php';
require '../config/db.php';

$app = new \Slim\App([
    'settings' => [
        'displayErrorDetails' => true,
    ]
]);

$app->get('/hello/{name}', function (Request $request, Response $response, array $args) 
{
    $name = $args['name'];
    $response->getBody()->write("Hello, $name");

    return $response;
});

//students routes
require '../Routes/students.php';

$app->run();