<?php
include('Mysql_connection.php');
$sql="SELECT idMateria From Materia";
$resultado=mysql_query($sql);
while ($fila=mysql_fetch_array($resultado)){
	$idMateria=$fila['idMateria'];
    echo "$idMateria <br>";
}


if('$_GET[ob]'=="si"){
$sql = "INSERT INTO Materia (NombreMateria, NumCreditos, Semestre, Obligatoria)
    VALUES ('$_GET[nom]', $_GET[cred], '$_GET[sem]', '$_GET[ob]')";
}else{
$sql = "INSERT INTO Materia ( NombreMateria, NumCreditos, Semestre, Obligatoria)
    VALUES ('$_GET[nom]', $_GET[cred], '$_GET[sem]', '$_GET[ob]')";
}
$query=mysql_query($sql,$dbhandle);
if ($query) {
    echo "New record created successfully Materia<br>";
    $uno=1;
	$newidMateria=intval($idMateria)+$uno;
	echo "$newidMateria=$idMateria+$uno<br>";
} else {
    echo mysql_error();
}

$sql= "INSERT INTO maestro_has_materia (Maestro_idMaestro, Materia_idMateria)
	VALUES('$_GET[prof]','$newidMateria')";
$query=mysql_query($sql,$dbhandle);
if ($query) {
    echo "New record created successfully maestro_has_materia";
} else {
    echo mysql_error();
}
header('Location: /MVCNoFW-master/agregarMateria.php');
?>
