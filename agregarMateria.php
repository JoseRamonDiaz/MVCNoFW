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
		<div id="logo">
			<h1><a href="#" title="LIS FMAT">LIS FMAT</a></h1>
			<p>Un espacio para compartir apuntes e información</p>
		</div>
  <ul id="nav">
			<li><a class="current" href="#"><span class="akey">I</span>nicio</a></li>
			<li><a href="#" ><span class="akey">P</span>rofesores</a></li>
            <li><input type="text"><button>Buscar</button></li>
		</ul>
    </div>
    <div class="wrap">
		<div id="left">
    <!-- InstanceBeginEditable name="EditRegion" -->
    <h2>Ingrese los datos de la materia</h2>
            <p>
                <?php
                include('/model/Mysql_connection.php');
                    $query="SELECT * FROM Maestro";
                    $resultado=mysql_query($query);
                    $fila=mysql_fetch_array($resultado);
            echo"<form action='/MVCNoFW-master/model/Insert_Materia.php' method='GET' id='form'>
                <label for='nom'>Nombre: </label>
                <input type='text' name='nom'>
                <label for='sem'>Semestre: </label>
                <input type='text' name='sem'>
                <label for='ob'>Obligatoria</label>
                <input type='radio' value='si' name='ob' checked>Si
                <input type='radio' value='no' name='ob'>No
                <label for='cred'>Creditos</label>
                <input type='number' name='cred' min='0' max='15'>
                <label for='prof'>Profesor: </label>
                <select name='prof' form='form'>";
                    while ($fila=mysql_fetch_array($resultado)){
                    echo"<option value=$fila[idMaestro]>
                    $fila[NombreMaestro] $fila[ApellidosMaestro]</option>";}
            echo"
            </select>
            <br>
            <input type='submit' value='Submit'>
            </select>
            </form>";
                ?>     
            </p>
    <!-- InstanceEndEditable -->
    </div>
    <div id="right">
     <!-- InstanceBeginEditable name="EditRegion1" -->
        <h2>Materias</h2>
			<ul>
				<li><a href="#">Cálculo</a></li>
				<li><a href="#">Sistemas distribuidos</a></li>
				<li><a href="#">Álgebra</a></li>
				<li><a href="#">Microprocesadores</a></li>
				<li><a href="#">Bases de datos</a></li>
                <li><a href="#">Sistemas operativos</a></li>
                <li><a href="#">Ecuaciones diferenciales</a></li>
			</ul>
        <!-- InstanceEndEditable -->
    </div>
    
    <div id="footer">
			<p><a href="#">Contacto</a></p>
		</div>
        </div>
</body>
<!-- InstanceEnd --></html>
