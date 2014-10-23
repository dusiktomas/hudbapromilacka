<?php
class Database {
    private static $db = Null;
	
    public static function handler(){
		if(self::$db === Null){
			$mysqli = new mysqli('wm71.wedos.net', 'a83347_milacek', 'qTwHRNPq', 'd83347_milacek');
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