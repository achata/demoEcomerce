<?php
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
require '../vendor/autoload.php';
require '../DataAccessLayer/Usuario.php';
require '../BusinessLogicLayer/AutenticacionLogic.php';
require '../DataAccessLayer/Conexion.php';
//require '../DataAccessLayer/Helpers/JWT.php';


$app = new  \Slim\App;
//Conexion::openConnect();
require '../ServiceLayer/AutenticacionService.php';
/*$app->get('/hello/{name}', function (Request $request, Response $response, array $args) {
    $name = $args['name'];
    $response->getBody()->write("Hello, $name");
    return $response;
});*/

$app->run();