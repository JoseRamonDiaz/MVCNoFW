<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include('controller/sessionvalidateclose.php');
include 'Mysql_connection.php';

$link = $_GET["link"];
$Materia_idMateria = $_GET["Materia_idMateria"];

$query = "INSERT INTO enlaces (NombreEnlace,Materia_idMateria)
VALUES ('$link', $Materia_idMateria)";

$result = mysql_query($query, $dbhandle);
header("Location: ../archivoGuardado.php");
exit;
?>