<?php
class Audio extends Database{
	private $id = Null;
	
	public function __construct($name){
	  if(self::getAudioIdByName($name) != Null){
	    $id = self::getAudioIdByName($name);
	  }else{
	    return false;
	  }
	  $this->query = "
	    UPDATE audio SET koupeno = '1' WHERE id = '".$id."'"; 
	  if(self::handler()->query($this->query)){
	    $id = self::handler()->query('SELECT LAST_INSERT_ID()');
	    $id = $id->fetch_row();
	    $this->id = $id[0];
	    return true;
	  }
	  return false;
	}
	
	public function isSold(){
	  if($this->id != Null){
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
}
?>