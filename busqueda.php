<?php


$where = "";

if(!empty($_POST))
{
    $valor = $_POST['campo'];
    if(!empty($valor)){
        $where = "WHERE `Codigo Tracto`='$valor'";
    }
}
$sql = "SELECT * FROM dt $where";
$resultado = $mysqli->query($sql);

?>
