<?php
class Redirection{
  public static function orderRedirectToSuccess(){
    return header('Location: ?order=success');
  }
  public static function orderRedirectToError(){
    return header('Location: ?order=error');
  }
}
?>