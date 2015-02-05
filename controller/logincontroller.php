<?php 
		include('../model/Mysql_connection.php');
		session_start();
		{
		    $user=mysql_real_escape_string($_POST['username']);
		    $pass=mysql_real_escape_string($_POST['password']);
		    $fetch=mysql_query("SELECT * FROM `usuario` WHERE 
		                         NombreUsuario='$user' and Contrsena='$pass'")  or die('Consulta fallida: ' . mysql_error());
		    $count=mysql_num_rows($fetch);
		    if($count!="")
		    {
			    $_SESSION['login_username']=$user;
			    header("Location:../index.php"); 
		    }
		    else
		    {
		    	echo $count;
		       header('Location:../login.php');
		    }

		}
 ?>
