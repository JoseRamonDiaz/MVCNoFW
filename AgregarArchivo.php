<?php
    $idMaestro = $_GET["idMaestro"];
    $idMateria = $_GET["idMateria"];
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
    <h2>Llena los datos del material</h2>
            <p>
                <form action="model/GuardarArchivo.php" method="post" enctype="multipart/form-data">
                <input type="radio" name="tipo" value="tarea">Tarea</input>
                <input type="radio" name="tipo" value="examen">Examen</input>
                <?php
                
                echo "<input type='text' value='$idMaestro' name='idMaestro' hidden/>";
                echo "<input type='text' value='$idMateria' name='idMateria' hidden/>";
                ?>
                <label for="nombre">Nombre: </label>
                <input type="text" name="nombre" id="nombre"></input>
                <label for="descripcion">Descripción: </label>
                <input type="text" id="descripcion" name="descripcion"></input>
                <label for="archivo">Archivo: </label>
                <input type="file" name="archivo"></input>
                <input type="submit"></input>
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
