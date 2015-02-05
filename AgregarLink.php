<?php
    $Materia_idMateria = $_GET["Materia_idMateria"];
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
                <form method="get" action="model/GuardarEnlace.php">
                
                <label for="link">Enlace: </label>
                <input type="text" id="link" name="link"/>
                <?php
                    echo "<input type='text' name='Materia_idMateria' value='$Materia_idMateria' hidden/>";
                ?>
                <input type="submit">
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
