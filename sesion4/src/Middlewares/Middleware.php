<?php 

$a = function($request, $response, $next){
		$response->getBody()->write('INICIO MIDDLEWARE ');
		$response = $next($request, $response);
		$response->getBody()->write('FIN MIDDLEWARE ');

		return $response;
	};

$app->add($a);