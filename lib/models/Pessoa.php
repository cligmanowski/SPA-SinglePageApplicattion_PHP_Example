<?php

namespace Models;
/**
* 
*/
class Pessoa
{
	
	public static function all() 
	{

		$DB = new \DB;
		$sql = " SELECT * from pessoa " ;
		$stmt = $DB->prepare( $sql );
		$stmt->execute();

		$pessoas = $stmt->fetchAll( \PDO::FETCH_OBJ );

		echo json_encode($pessoas);

	}
}


?>