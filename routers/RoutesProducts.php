<?php

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Routing\RouteCollectorProxy;
use App\Controllers\ServicesController;

require(\dirname(__DIR__,1)."/Controllers/ServicesController.php");


$app->group("/services", function (RouteCollectorProxy $group) {
    $group->get("/services-name", function ($request, $response) {  
        $class = new ServicesController();
        $response->getBody()->write(\json_encode($class->allServices()));
        return $response->withHeader('Content-Type', 'application/json');
    });

    $group->get("/services-name/{name}", function ($request, $response, array $args) {
        $name = $args['name'];
        $class = new ServicesController();
        $response->getBody()->write(\json_encode($class->find($name)));
        return $response->withHeader('Content-Type', 'application/json');
    });
    $group->post("/services-name/add/{name}", function ($request, $response, array $args) {
        $name = $args['name'];
        $class = new ServicesController();
        $response->getBody()->write(\json_encode($class->addService($name)));
        return $response->withHeader('Content-Type', 'application/json');
    });

    $group->put("/services-name/update/{name}/{id}", function ($request, $response, array $args) {
        $name = $args['name'];
        $id = $args['id'];
        $class = new ServicesController();
        $response->getBody()->write(\json_encode($class->updateService($name, $id)));
        return $response->withHeader('Content-Type', 'application/json');
    });

    $group->delete("/services-name/delete/{name}", function ($request, $response, array $args) {
        $name = $args['name'];
        $class = new ServicesController();
        $response->getBody()->write(\json_encode($class->deleteService($name)));
        return $response->withHeader('Content-Type', 'application/json');
    });
});