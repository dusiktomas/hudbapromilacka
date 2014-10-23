<?php
require_once 'vendor/twig/twig/lib/Twig/Autoloader.php';
require '../autoloader.php';
Twig_Autoloader::register();
$loader = new Twig_Loader_Filesystem('templates');
$twig = new Twig_Environment($loader, array(
    'cache' => 'compilation_cache',
	'auto_reload' => true,
));
$template = $twig->loadTemplate('index.html');


if(isset($_GET['log_id'])){
	$id = $_GET["log_id"];
	Logger::setErrorSolved($id);
	header("Location: /admin");
}
$adminer = new Adminer();
echo $template->render(
	  array(
	    'adminer' => $adminer, 
	    'orderCount' => $adminer->getOrdersCountByDate(date('d-m-y')),
		)
	 );


