<?php
class Order extends Database{
  private $id = Null;

  public function __construct ($args){
	$query = "
	  INSERT INTO orders(typ, prani, audio, cena, datum_objednani) 
	  VALUES ('".$args['typ']."', '".$args['prani']."', '".$args['audio']."',
	  '".$args['cena']."', '".$args['datum_objednani']."', '".$args['customer']."');
	"; 
	if(self::handler()->query($query)){
	  return true;
	}
	return false;
  }
  
  public function getId(){
    return $this->id;
  }
  
  public function isExists(){
    if (!$id === Null){
	  return true;
	}
	return false;
  }
}
?>