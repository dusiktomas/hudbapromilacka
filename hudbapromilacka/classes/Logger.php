<?php
class Logger extends Database{
  private $id = Null;
  private $param = Null;
  private $type = Null;
  private $query = Null;
  
  public function __construct ($type, $param = ''){
    $this->param = $param;
	$this->type = $type;
	if($this->type == 1){
	  $this->addErrorLog();
	}else{
	  $this->addSucessLog();
	}
	if(self::handler()->query($this->query)){
	  $id = self::handler()->query('SELECT LAST_INSERT_ID()');
	  $id = $id->fetch_row();
	  $this->id = $id[0];
	  return true;
	}
	$this->query = "
	  INSERT INTO logs(datum, type, msg) VALUES ('".date('d.m.Y')."', '1', 'Nezdařilo se přidat chybu!');
	";
	self::handler()->query($this->query);
	return false;
  }
  
  public static function setErrorSolved($id){
	$query = "UPDATE logs SET vyreseno = '1' WHERE id = '".$id."'";
	self::handler()->query($query);
  }
  
  private function addErrorLog(){
    $this->query = "
	  INSERT INTO logs(datum, type, msg) 
	  VALUES ('".date('d.m.Y:h:i')."', '1', 'Objednávka se nezdařila, spadla u vytváření požadavku ".$param.", post: ".json_encode($_POST)."');
	"; 
  }
  
  private function addSucessLog(){
    $this->query = "
	  INSERT INTO logs(datum, type, msg) 
	  VALUES ('".date('d.m.Y:h:i')."', '0', 'Potvrzena nová objednávka, post: ".json_encode($_POST)."');
	"; 
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