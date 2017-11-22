<?php

//conexion a la base de datos

$mysqli = new mysqli('localhost','root','','raciemsa');

if($mysqli->connect_error){

    die('Error en la conexion'.$mysqli->connect_error);
}




?>