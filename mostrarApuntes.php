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
            <h2>Apuntes</h2>        
    <p>
        <?php 
            echo "<table id='data'><th>Materia</th><th>Maestro</th><th>Apunte</th><tr>";
                include('/model/Mysql_connection.php');
                    $query="SELECT * FROM Apuntes 
                            LEFT JOIN Maestro_has_Materia 
                                ON Apuntes.idMateria=Maestro_has_Materia.Materia_idMateria AND Apuntes.idMaestro=Maestro_has_Materia.Maestro_idMaestro
                            LEFT JOIN Materia 
                                ON Maestro_has_Materia.Materia_idMateria=Materia.idMateria
                            LEFT JOIN Maestro 
                                ON Maestro_has_Materia.Maestro_idMaestro=Maestro.idMaestro";
                    $resultado=mysql_query($query);
                    while ($fila=mysql_fetch_array($resultado)){
                        echo "<td>$fila[NombreMateria]</td>";
                        echo "<td>$fila[NombreMaestro] $fila[ApellidosMaestro]</td>";
                        echo "<td><a href=$fila[ArchivoApuntes]>";
                        echo "  $fila[NombreApuntes]</a></td><br>";
                    }
            echo"</tr></table>";
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
*****-
