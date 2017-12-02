<?php
require 'conexion.php';
require 'paginacion.php';

$where = "";

if(isset($_POST['codigo_tracto']))
{
    $valor = $_POST['doc'];
    if(isset($valor)){
        $where = "WHERE `Codigo Tracto`='$valor'";
    }

$sql = "SELECT * FROM dt $where";
$resultado = $mysqli->query($sql);

//while($consulta = mysqli_fetch_array($resultado)){

        }



//$resultados = mysqli_query($mysqli,"SELECT * FROM dt WHERE id = '$otra_variable'");
//while($consulta = mysqli_fetch_array($resultados))
?>


<?php
include ('header.php');
include('navbar.php');
    ?>


    <div class="container">
        <form method="POST" action="" class="ml-auto pt-5 ">

        <div class="form-group row text-center">
            <label for="doc" class="col-1 col-form-label"><b>Unidad:</b></label>
            <input type="text" name="doc" class="col-1 form-control" id="doc">
            <input type="submit" value="Consultar" class="btn btn-primary ml-2" name="codigo_tracto">
        </div>
          </form>
    </div>
<div class="container" >
    <div class="row table-responsive">
        <table class="table table-striped">
            <thead>
            <tr class="text-center">
                <th>ID</th>
                <th>Numero DT</th>
                <th>Fecha DT</th>
                <th>Codigo Acople</th>
                <th>Placa Acople</th>
                <th>Codigo Sap</th>
                <th>Nombre</th>
                <th>Clase DT</th>
                <th></th>
                <th></th>
            </tr>
            </thead>
            <?php

            while ($consulta_dt = $resultado->fetch_array(MYSQLI_BOTH))
            {

                echo'<tr>
						 <td>'.$consulta_dt['id_DT'].'</td>
						 <td>'.$consulta_dt['numero DT'].'</td>
						 <td>'.$consulta_dt['Fecha Inicio'].'</td>
						 <td>'.$consulta_dt['Codigo Acople'].'</td>
						 <td>'.$consulta_dt['Placa Acople'].'</td>
						 <td>'.$consulta_dt['Codigo Sap'].'</td>
						 <td>'.$consulta_dt['Nombre'].'</td>
						 <td>'.$consulta_dt['Clase DT'].'</td>
						 </tr>';
            }
            ?>
        </table>

</div>
</div>
<?php include ('footer.php') ?>