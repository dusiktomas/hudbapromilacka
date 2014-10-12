<?php
class Adminer extends Database{

  public function getAllLogs(){
    $array = array();
    $query = $this->query('SELECT * FROM logs');
	while($row = $query->fetch_assoc()){
	  $array[] = $row;
	}
	return $array;
  }
}