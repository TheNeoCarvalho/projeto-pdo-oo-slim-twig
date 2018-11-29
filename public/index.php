<?php

	require ('../bootstrap.php');

	$app->get('/cadastro', 'app/controllers/HomeController:index');

	$app->run();
?>