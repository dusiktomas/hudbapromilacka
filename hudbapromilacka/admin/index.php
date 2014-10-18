 <?php
require_once '/vendor\twig\twig\lib\Twig\Autoloader.php';
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
	header("Location: /hudbapromilacka/hudbapromilacka/admin/");
}
echo $template->render(array('adminer' => new Adminer()));


