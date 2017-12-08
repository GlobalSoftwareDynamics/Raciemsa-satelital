<?php
require 'conexion.php';
require 'paginacion.php';

include ('header.php');
include('navbar.php');

//$resultados = mysqli_query($mysqli,"SELECT * FROM dt WHERE id = '$otra_variable'");
//while($consulta = mysqli_fetch_array($resultados))
    ?>


    <div class="container">
        <form method="POST" action="" class="ml-auto pt-5 ">

        <div class="form-group row text-center">
            <label for="doc" class="col-1 col-form-label"><b>Unidad:</b></label>
            <input type="text" name="doc" class="form-control col-4" id="doc" autocomplete="off" placeholder="Ingrese Nombre o Apeliido...">
            <input type="submit" value="Consultar" class="btn btn-primary ml-2" name="codigo_nombre">
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
                <th>Codigo Tracto</th>
                <th>Placa Traco</th>
                <th>Codigo Acople</th>
                <th>Placa Acople</th>
                <th>Clase DT</th>
                <th></th>
                <th></th>
            </tr>
            </thead>
            <?php
                $where = "";

                if(isset($_POST['codigo_nombre']))
                {
                    $valor = $_POST['doc'];
                    if(isset($valor)){
                        $where = "WHERE `Nombre`='$valor' AND `clase DT` = 'ZRAC'";
                    }

                    $sql = "SELECT * FROM dt $where ORDER BY id_DT DESC";
                    $resultado = $mysqli->query($sql);
            while ($consulta_dt = $resultado->fetch_array(MYSQLI_BOTH))
            {

                echo'<tr>
						 <td>'.$consulta_dt['id_DT'].'</td>
						 <td>'.$consulta_dt['numero DT'].'</td>
						 <td>'.$consulta_dt['Fecha Inicio'].'</td>
						 <td>'.$consulta_dt['Codigo Tracto'].'</td>
						 <td>'.$consulta_dt['Placa Tracto'].'</td>
						 <td>'.$consulta_dt['Codigo Acople'].'</td>
						 <td>'.$consulta_dt['Placa Acople'].'</td>
						 <td>'.$consulta_dt['Clase DT'].'</td>
						 </tr>';
            }}
            ?>
        </table>

</div>
</div>
<br>
<br>
    <div class="container" >
        <div class="row table-responsive">
            <table class="table table-striped">
                <thead>
                <tr class="text-center">
                    <th>ID</th>
                    <th>Numero DT</th>
                    <th>Fecha DT</th>
                    <th>Codigo Tracto</th>
                    <th>Placa Traco</th>
                    <th>Codigo Acople</th>
                    <th>Placa Acople</th>
                    <th>Clase DT</th>
                    <th></th>
                    <th></th>
                </tr>
                </thead>
                <?php
                $where = "";

                if(isset($_POST['codigo_nombre']))
                {
                    $valor = $_POST['doc'];
                    if(isset($valor)){
                        $where = "WHERE `Nombre`='$valor' AND `clase DT` = 'ZRAM'";
                    }

                    $sql = "SELECT * FROM dt $where ORDER BY id_DT DESC";
                    $resultado = $mysqli->query($sql);
                    while ($consulta_dt = $resultado->fetch_array(MYSQLI_BOTH))
                    {

                        echo'<tr>
						 <td>'.$consulta_dt['id_DT'].'</td>
						 <td>'.$consulta_dt['numero DT'].'</td>
						 <td>'.$consulta_dt['Fecha Inicio'].'</td>
						 <td>'.$consulta_dt['Codigo Tracto'].'</td>
						 <td>'.$consulta_dt['Placa Tracto'].'</td>
						 <td>'.$consulta_dt['Codigo Acople'].'</td>
						 <td>'.$consulta_dt['Placa Acople'].'</td>
						 <td>'.$consulta_dt['Clase DT'].'</td>
						 </tr>';
                    }}
                ?>
            </table>

        </div>
    </div>
    <script>
        $(document).ready(function(){

            $('#doc').typeahead({
                source: function(query, result)
                {
                    $.ajax({
                        url:"autocomplete.php",
                        method:"POST",
                        data:{query:query},
                        dataType:"json",
                        success:function(data)
                        {
                            result($.map(data, function(item){
                                return item;
                            }));
                        }
                    });
                }
            });

        });
    </script>

<?php include ('footer.php') ?>