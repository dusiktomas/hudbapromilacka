 <?php
require_once '/vendor\twig\twig\lib\Twig\Autoloader.php';
require '../autoloader.php';
Twig_Autoloader::register();
$loader = new Twig_Loader_Filesystem('templates');
$twig = new Twig_Environment($loader, array(
    'cache' => 'compilation_cache',
));
$template = $twig->loadTemplate('index.html');

echo $template->render(array('the' => 'variables', 'go' => 'here'));


$adminer = new Adminer();

foreach($adminer->getAllLogs() as $log){
  print($log['id']);
  print('<br>');
}