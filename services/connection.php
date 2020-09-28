<?php
$host="localhost";
$user="root";
$pass="";
$db="reread";
	$conn=mysqli_connect($host, $user, $pass, $db);

// CHECKEAR LA CONEXION
if (!$conn) {
	echo "Error: No se pudo conectar a MySQL." . PHP_EDL;
	echo "Error de depuración: " . mysqli_connect_error() . PHP_EDL;
	exit;
}else {
	mysqli_set_charset($conn, "utf8");
}
?>