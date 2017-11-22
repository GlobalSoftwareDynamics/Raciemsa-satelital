<?php

require'conexion.php';

$pagina=isset($_GET['pagina']) ? (int)$_GET['pagina'] : 1;

$items_por_pagina=10;

$item = $pagina * $items_por_pagina;

$sql_code="SELECT * FROM dt LIMIT $item,$items_por_pagina";
$execute = $mysqli->query($sql_code) or die($mysqli->error);
$dt = $execute->fetch_assoc();
$num = $execute->num_rows;

$num_total = $mysqli->query("SELECT * FROM dt")->num_rows;
$num_paginas = ceil($num_total/$items_por_pagina);

?>