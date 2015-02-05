<?php 
    include('controller/sessionvalidateclose.php');
 ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><!-- InstanceBegin template="/Templates/plantilla2.dwt" codeOutsideHTMLIsLocked="false" -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!-- InstanceBeginEditable name="doctitle" -->
<title>Untitled Document</title>
<link rel="stylesheet" href="css/main2.css" type="text/css" />
	<title>LIS FMAT</title>
<!-- InstanceEndEditable -->
<!-- InstanceBeginEditable name="head" -->
<!-- InstanceEndEditable -->
</head>

<body>
<div class="wrap">
	<?php include('header.php'); ?>
    <div class="wrap">
		<div id="left">
    <!-- InstanceBeginEditable name="EditRegion" -->
    <h2>Registro</h2>
    <p>
    <form action="controller/registrocontroller.php" method="POST">
        <label for="name" >Nombre: </label>
        <input type="text" id="name" name="name" required>
         <label for="lastName" >Apellidos: </label>
        <input type="text" id="lastname" name="lastname" required>
         <label for="userName" >Nombre de usuario: </label>
        <input type="text" id="user" name="user" required>
        <label for="pass" >Contraseña: </label>
        <input type="password" id="pass" name="pass" required>
        <label for="mail" >Correo: </label>
        <input type="email" id="mail" name="mail" required>
        <label for="photo" >Foto de perfil: </label>
        <input type="submit" value="Registrarte">
    </form>
            </p>        
	<!-- InstanceEndEditable -->
    </div>
    <div id="right">
     <!-- InstanceBeginEditable name="EditRegion1" -->
     <?php include('barralado.php'); ?>
	 <!-- InstanceEndEditable -->
    </div>
    
<?php include('footer.php'); ?>
        </div>
</body>
<!-- InstanceEnd --></html>
