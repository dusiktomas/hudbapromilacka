<?php
class Customer extends Database{
  public $id = Null;
  
  public function __construct($args){
    $query = "
	INSERT INTO customers(jmeno, prijmeni, email, mesto, ulice, psc, dorucovaci_mesto, dorucovaci_ulice, dorucovaci_psc, dorucovaci_jmeno, dorucovaci_prijmeni)
	VALUES ('".$args['jmeno']."', '".$args['prijmeni']."', '".$args['email']."', 
	'".$args['mesto']."', '".$args['ulice']."', '".$args['psc']."', '".$args['dorucovaci_mesto']."',
	'".$args['dorucovaci_ulice']."', '".$args['dorucovaci_psc']."', '".$args['dorucovaci_jmeno']."', '".$args['dorucovaci_prijmeni']."');
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