<?php

	require '../vendor/autoload.php';
	//namespace

	$app = new Slim\App;

	$app->get('/', function($req, $res){
		$res->getBody()->write("Hello World");
	});

	$app->run();
?>