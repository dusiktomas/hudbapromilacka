<?php
class Adminer extends Database{

  public function getAllLogs(){
    $array = array();
    $query = $this->query('SELECT * FROM logs WHERE type = "0" ORDER BY id DESC');
	while($row = $query->fetch_assoc()){
	  $array[] = $row;
	}
	return $array;
  }
  
  public function getAllAudio(){
    $array = array();
    $query = $this->query('SELECT * FROM audio ORDER BY id DESC');
	while($row = $query->fetch_assoc()){
	  $array[] = $row;
	}
	return $array;
  }

  public function getAllOrders(){
    $array = array();
    $query = $this->query('SELECT * FROM orders ORDER BY id DESC');
	while($row = $query->fetch_assoc()){
	  $array[] = $row;
	}
	return $array;
  }
  public function getAllErrors(){
    $array = array();
    $query = $this->query("SELECT * FROM logs WHERE type = '1' AND vyreseno = '0' ORDER BY id DESC");
	while($row = $query->fetch_assoc()){
	  $array[] = $row;
	}
	return $array;
  }
  public function getAllCustomers(){
    $array = array();
    $query = $this->query("SELECT * FROM customers ORDER BY id DESC");
	while($row = $query->fetch_assoc()){
	  $array[] = $row;
	}
	return $array;
  }
}