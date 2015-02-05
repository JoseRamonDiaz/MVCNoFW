<?php 

	include('/model/Mysql_connection.php');
	session_start();
	if (isset($_SESSION['login_username'])) {
		$check=$_SESSION['login_username'];
		$session=mysql_query("SELECT NombreUsuario FROM `usuario` WHERE NombreUsuario='$check' ");
		$row=mysql_fetch_array($session);
		$login_session=$row['NombreUsuario'];
		if(!isset($login_session))
		{
			header("Location: index.php");
		}
	} else {
		header("Location: index.php");
	}
	
 ?>