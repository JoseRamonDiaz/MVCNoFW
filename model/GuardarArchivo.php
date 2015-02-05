<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include('controller/sessionvalidateclose.php');
include 'Mysql_connection.php';

$tipo = $_POST["tipo"];
$nombre = $_POST["nombre"];
$descripcion = $_POST["descripcion"];
$idMaestro = $_POST["idMaestro"];
$idMateria = $_POST["idMateria"];
$tipoBool = 0;
$url = "";

if (is_uploaded_file($_FILES['archivo']['tmp_name'])) {
    $nombreDirectorio = "../archivos/";
    $nombreFichero = $_FILES['archivo']['name'];

    $nombreCompleto = $nombreDirectorio . $nombreFichero;
    if (is_file($nombreCompleto)) {
        $idUnico = time();
        //$nombreFichero = $idUnico . "-" . $nombreFichero;
    }

    move_uploaded_file($_FILES['archivo']['tmp_name'], $nombreDirectorio . $nombreFichero);
    $url = $nombreDirectorio . $nombreFichero;
} else {
    echo "No se pudo subir el archivo";
}



if ($tipo == "examen") {
    $tipoBool = 0;
}
if ($tipo == "tarea") {
    $tipoBool = 1;
}
$query = "INSERT INTO apuntes (NombreApuntes, ArchivoApuntes, DescripcionApuntes,  Tipo, idMaestro, idMateria)
VALUES ('$nombre', '$url', '$descripcion', $tipoBool, $idMaestro, $idMateria)";

$result = mysql_query($query, $dbhandle);
header("Location: ../archivoGuardado.php");
exit;
?>