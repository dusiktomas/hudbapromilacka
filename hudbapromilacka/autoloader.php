<?php

$map = array(
  'classes/db.php',
  'classes/Logger.php',
  'classes/Redirection.php',
  'classes/Adminer.php',
);

foreach($map as $file){
  include $file;
}