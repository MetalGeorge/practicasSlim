<?php 

use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

//$app = new Slim\App();

$app->get('/hello/{name}', 
		  function ($request, $response, $args) {
		  		$response->write("Hello, " . $args['name']);
		  		
		  		$this->logger->addInfo('In home');
		  		//$this->asdas;
		  		return $response;
		  });

$app->get('/suma/{uno}/{dos}', 
		  function ($request, $response, $args) {
			    $total = $args['uno'] + $args['dos'];
		  		$response->write("Suma = " . $total);
				//$this->ssss;
		  		$this->logger->addInfo('In home');
		  		return $response;
		  });

$app->get('/home/[{name}]', 
		  function ($request, $response, $args) {
		  		return $this->view->render($response, 'index.phtml', $args);
		  });

$app->get('/test', '\App\Controllers\UserController:show')->setName('mt');

//->add('\App\Middlewares\ExampleMiddleware')

$app->get('/users', '\App\Controllers\UserController:users')->setName('users')->add('\App\Middlewares\ExampleMiddleware');;

?>