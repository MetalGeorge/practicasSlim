<?php 

return [
	'settings'=>[
	'displayErrorDetails'=>true,
	'logger'=>[
		'name'=>'slim-app',
		'path'=>'../logs/app.log',
		//'path'=>__DIR__ . '/../logs/app.log',
		],

		'renderer'=>[
			'template_path'=>'../templates/',
		],

		'db'=> [
			'database_type'=>'mysql',
			'database_name'=>'testslim',
			'server'=>'localhost',
			'username'=>'root',
			'password'=>'',
			'charset'=>'utf8'
		],
	]
];
