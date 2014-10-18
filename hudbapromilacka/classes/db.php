<?php
class Database {
    private static $db = Null;
	
    public static function handler(){
		if(self::$db === Null){
			$mysqli = new mysqli('localhost', 'root', '', 'hudbapromilacka');
			if ($mysqli->connect_error) {
				die('Connect Error (' . $mysqli->connect_errno . ') '
						. $mysqli->connect_error);
			}
			$mysqli->query ("SET NAMES UTF8");
			return self::$db = $mysqli;
		}else{
			return self::$db;
		}
    }
	
	protected function query($query){
	  $handle = self::handler()->query($query);
	  return $handle;
	}
}

?>