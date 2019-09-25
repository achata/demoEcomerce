<?php 
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Factory\AppFactory;
//use DataAccess\Usuario;


$app->post('/api/autenticacion', function (Request $request, Response $response, array $args) {
    
    $usuario = new Usuario();
    $autenticacionLogic = new AutenticacionLogic();
    $array = array();
    /*$usuario->_SET('id',$request->getParam('id'));
    $usuario->_SET('email',$request->getParam('email'));
    $usuario->_SET('clave',$request->getParam('clave'));*/
    $usuario->setId($request->getParam('id'));
    $usuario->setEmail($request->getParam('email'));
    $usuario->setClave($request->getParam('clave'));
    //var_dump($usuario);
    $array = $autenticacionLogic->getUser($usuario);
    echo json_encode($array);
    return $response;
});

?>