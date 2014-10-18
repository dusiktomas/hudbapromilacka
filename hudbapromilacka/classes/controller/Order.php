<?php
class Order extends Database{
  private $id = Null;

  public function __construct ($args){
	$this->query = "
	  INSERT INTO orders(typ, prani, audio, cena, datum_objednani, customer, jmeno_osoby) 
	  VALUES ('".$args['typ']."', '".$args['prani']."', '".$args['audio']."',
	  '".$args['cena']."', '".$args['datum_objednani']."', '".$args['customer']."', '".$args['jmeno_osoby']."');
	"; 
	if(self::handler()->query($this->query)){
	  $id = self::handler()->query('SELECT LAST_INSERT_ID()');
	  $id = $id->fetch_row();
	  $this->id = $id[0];
	  return true;
	}
	return false;
  }
  
  public function getQuery(){
    return $this->query;
  }
  
  public function getId(){
    return $this->id;
  }
  
  public function isExists(){
    if(!$this->id == Null){
	  return true;
	}
	return false;
  }
}
?>