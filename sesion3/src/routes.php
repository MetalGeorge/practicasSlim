<?php 

use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

//$app = new Slim\App();

$app->get('/hello/{name}', 
		  function ($request, $response, $args) {
		  		$response->write("Hello, " . $args['name']);
		  		
		  		$this->logger->addInfo('In home');
		  		//$this->lineaparacausarUnError;
		  		return $response;
		  });

$app->get('/suma/{uno}/{dos}', 
		  function ($request, $response, $args) {
			    $total = $args['uno'] + $args['dos'];
		  		$response->write("Suma = " . $total);
				//$this->lineaparacausarUnError;
		  		$this->logger->addInfo('In home');
		  		return $response;
		  });
?>