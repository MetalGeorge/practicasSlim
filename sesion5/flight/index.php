<?php 

require 'vendor/autoload.php';

// Flight::route('/', function(){
    // echo 'hello world!';
// });

Flight::route('/prueba/', function(){
    echo 'hello prueba!';
});

Flight::start();