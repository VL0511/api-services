<?php

require __DIR__."/vendor/autoload.php";

use Slim\Factory\AppFactory;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;


$app = AppFactory::create();
$app->addRoutingMiddleware();
$errorMiddleware = $app->addErrorMiddleware(true, true, true);


$app->get('/', function (Request $request, Response $response) {
	$payload = json_encode(array('status' => '200','message' => 'API Working', 'timestamp' => \time()));
	$response->getBody()->write($payload);
	return $response->withHeader('Content-Type', 'application/json');
});

//INCLUSÃO DAS ROTAS 
include_once("routers/RoutesProducts.php");

$app->run();