<?php

	require '../vendor/autoload.php';
	//namespace

	use Slim\App;

	$config['displayErrorDetails'] = true;
	//$config['displayErrorDetails'] = true;

	$app = new App(['settings' => $config]);
	//$app = new App(['settings' => $config]);

	$app->get('/', function($req, $res){
		$res->getBody()->write("Hello World");
	});

	$app->run();
?>