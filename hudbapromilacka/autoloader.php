<?php

$map = array(
  'classes/db.php',
  'classes/Logger.php',
  'classes/Redirection.php',
  'classes/Adminer.php',
  'classes/Prices.php',
  'classes/controller/Audio.php',
  'classes/controller/Customer.php',
  'classes/controller/Order.php',
  'classes/controller/Mailer.php',
);

foreach($map as $file){
  include $file;
}