<?php
class Order extends Database{
  private $id = Null;
  public $query = Null;
  
  public function __construct ($args){
	$this->query = "
	  INSERT INTO orders(typ, prani, cena, datum_objednani, customer) 
	  VALUES ('".$args['typ']."', '".$args['prani']."',
	  '".$args['cena']."', '".$args['datum_objednani']."', '".$args['customer']."');
	"; 
	if(self::handler()->query($this->query)){
	  $id = self::handler()->query('SELECT LAST_INSERT_ID()');
	  $id = $id->fetch_row();
	  $this->id = $id[0];
	  return true;
	}
	return false;
  }

  public function getId(){
    return $this->id;
  }
  
  public function isExists(){
    if($this->id !== Null){
	  return true;
	}
	return false;
  }
}
?>