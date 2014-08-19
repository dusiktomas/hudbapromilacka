<?php
class Audio extends Database{

  public function newAudio($args){
  
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