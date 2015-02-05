
<?php 
    include('controller/index-controller.php');

    $controller = new indexcontroller();

    $result = $controller->getMaterias();
    session_start();
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
            <h2>Listado de materias</h2>
            <p>
                <?php if (isset($_SESSION['login_username']) && $_SESSION['login_username']!=''): ?>
                    <a href="agregarMateria.html">Agregar materia</a>                    
                <?php endif ?>
               
			<ul>
                <?php 
                    while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) { ?> 
                
        				<li><a href="MatInfo2.php?<?php echo $line['idMateria'] ?>"><?php echo $line['NombreMateria'] ?></a></li>
                <?php    }
                 ?> 
			</ul>
            </p>
            <!-- InstanceEndEditable -->
    </div>
    <div id="right">
     <!-- InstanceBeginEditable name="EditRegion1" -->
        
        
        <!-- InstanceEndEditable -->
    </div>
    
<?php include('footer.php'); ?>
    </div>
</body>
<!-- InstanceEnd --></html>
