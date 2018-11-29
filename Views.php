<?php 

$loader = new Twig_Loader_Filesystem('app/views');
$twig = new Twig_Environment($loader, array(
    'debug' => true
));