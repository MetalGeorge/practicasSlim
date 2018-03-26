<?php

$app = require('lib/base.php'); // equivalente a autoload
$app->route('GET /', function(){
	echo "Hola Mundo";
});


$app->run();