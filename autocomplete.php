<?php

require 'conexion.php';

$request = mysqli_real_escape_string($mysqli, $_POST["query"]);
$query = " SELECT * FROM dt WHERE Nombre LIKE '%".$request."%'";

$result = mysqli_query($mysqli, $query);

$data = array();


if(mysqli_num_rows($result) > 0)
{
    while($row = mysqli_fetch_assoc($result))
    {
        $data[] = $row["Nombre"];
    }
    echo json_encode(array_values(array_unique($data)));
}

?>