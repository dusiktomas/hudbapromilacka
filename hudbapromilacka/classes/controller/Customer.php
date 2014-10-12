<?php
class Customer extends Database{
  public $id = Null;
  
  public function __construct($args){
    $query = "
	INSERT INTO customers(jmeno, prijmeni, email, mesto, ulice, psc)
	VALUES ('".$args['jmeno']."', '".$args['prijmeni']."', '".$args['email']."', 
	'".$args['mesto']."', '".$args['ulice']."', '".$args['psc']."');
	";
	$result = self::handler()->query($query);
	if($result){
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
    if(!$this->id == Null){
	  return true;
	}
	return false;
  }
}
?>