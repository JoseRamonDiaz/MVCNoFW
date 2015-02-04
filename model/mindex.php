<?php 	
	
	class mindex {

		function mindex(){
			include('Mysql_connection.php');
		}

		function getAllMaterias(){
			$query = "
				SELECT * FROM `materia`
			";

			$result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());
			return $result;
		}
	}
 ?>