<?php 
include('/model/Mysql_connection.php');
session_start();
if (!isset($_SESSION['login_username'])) {
} else {
	header("Location: index.php");
}
 ?>