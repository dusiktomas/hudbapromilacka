<?php

$map = array(
  'classes/db.php',
  'classes/Logger.php',
  'classes/Redirection.php',
  'classes/Adminer.php',
  'classes/Prices.php',
);

foreach($map as $file){
  include $file;
}