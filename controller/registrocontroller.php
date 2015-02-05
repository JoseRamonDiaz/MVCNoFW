<?php 

	$post = json_decode(json_encode($_POST));
	$nombre 	=	mysql_real_escape_string($_POST['name']);	
	$apellido 	=	mysql_real_escape_string($_POST['lastname']);	
	$mail 		=	mysql_real_escape_string($_POST['mail']);

	$nombreusuario 	=	$post->user;	
	$contrasena 	=	$post->pass;	

	include('../model/Mysql_connection.php');

	echo $nombreusuario.', pass: '.$contrasena.', nombre: '.$nombre.', apellido: '.$apellido.', mail: '.$mail;

	$check = mysql_query("SELECT NombreUsuario FROM `usuario` WHERE NombreUsuario='$nombreusuario' OR CorreoElectronico = '$mail' ");
	$row = mysql_fetch_array($check);

	$isSet = $row['NombreUsuario'];

	if (isset($isset)){
		header('Location: ../registro.php');
	} else {
		$query = "
			INSERT INTO `mydb`.`usuario` 
			(`idUsuario`, `NombreUsuario`, `ApellidosUsuario`, `NombreDespliegue`, `Contrsena`, `CorreoElectronico`) 
			VALUES 
			(NULL, '$nombreusuario', '$apellido', '$nombre', '$contrasena', '$mail');
		";

		if (mysql_query($query)) {
			header('Location: ../login.php');
		} else {
			header('Location: ../registro.php');
		}
	}


 ?>