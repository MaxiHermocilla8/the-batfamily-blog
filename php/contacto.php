<?php
require_once "conection.php";
$name=$_POST["nombre"];
$Last_name=$_POST["apellido"];
$Email=$_POST["1email"];
$Message=$_POST["mensaje"];


$obj = new connection();
$con = $obj->connect();
$instruction_sql = "INSERT INTO contacto (nombre, apellido, email, mensaje) values ('{$name}', '{$Last_name}', '{$email}', '{$Message}')";
$result = $con->prepare($instruction_sql);
$result->execute();

echo "Los datos del usuario {$apellido},{$nombre} fueron procesados satisfactoriamente."
?>