<?php
class Redirection{
  public static function orderRedirectToSuccess(){
	$log = new Logger(0);
    return header('Location: ?sucess=true');
  }
  public static function orderRedirectToError($param){
	$log = new Logger(1, $param);
    return header('Location: ?error='.$param);
  }
}
?>