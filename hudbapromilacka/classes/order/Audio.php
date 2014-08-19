<?php
class Audio extends Database{
  private $id = Null;
  public $query = Null;
  
  public function __construct($args){
    $this->query = "
	  UPDATE audio SET objednavka = '".$args['order']."',
	  koupeno = '1' WHERE id = '".$args['audio']."';
	";
	
	if(self::handler()->query($this->query)){
	  $id = self::handler()->query('SELECT LAST_INSERT_ID()');
	  $id = $id->fetch_row();
	  $this->id = $id[0];
	  return true;
	}
	return false;
  }
  
  public function isExists(){
    if($this->id !== Null){
	  return true;
	}
	return false;
  }
  
  public static function getAudioIdByName($name){
	$query = "SELECT id FROM audio WHERE nazev = '".$name."'";
	$result = self::handler()->query($query);
    $id = $result->fetch_row();
	if($result){
	  return $id[0];
	}else{
	  return Null;
	}
  }
  
  public static function isAudioAvailable($name){
    $query = "
	  SELECT * FROM audio WHERE nazev = '".$name."';
	";
	if(self::handler()->query($query)){
	  return true;
	}
	return false;
  }
}
?>