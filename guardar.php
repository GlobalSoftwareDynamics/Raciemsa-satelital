<?php


    require 'conexion.php';

        $campo1 = $_POST['dt'];
        $campo2 = $_POST['fecha'];
        $campo3 = $_POST['tracto'];
        $campo4 = $_POST['acople'];
        $campo5 = $_POST['sap'];
        $campo6 = $_POST['clase'];


    $sql="INSERT INTO dt (`numero DT`, `Fecha Inicio`,`Codigo Tracto`,`Codigo Sap`, `Nombre`, `Clase DT`)
    VALUES ('$campo1','$campo2','$campo3','$campo4','$campo5','$campo6')";
    $resultado = $mysqli->query($sql);


?>

<?php include ('header.php') ?>

<div class="container">
    <div class="row justify-content-center">
        <?php if($resultado) { ?>
        <h3>REGISTRO GUARDADDO</h3>
        <?php } else { ?>
        <h3>ERROR AL GUARDAR</h3>
        <?php } ?>

        <a href="index.php" class="btn btn-primary">Regresar</a>

    </div>
</div>

<?php include ('footer.php') ?>


