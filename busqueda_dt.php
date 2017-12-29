<?php
session_start();
require 'conexion.php';


include ('header.php');
include('navbar.php');

//$resultados = mysqli_query($mysqli,"SELECT * FROM dt WHERE id = '$otra_variable'");
//while($consulta = mysqli_fetch_array($resultados))
    ?>


    <div class="container">
        <form method="POST" action="" class="ml-auto pt-5 ">

        <div class="form-group row text-center">
            <label for="doc" class="col-1 col-form-label"><b>Unidad:</b></label>
            <input type="text" name="doc" class="col-1 form-control" id="doc"  >
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
            $pagina=isset($_GET['pagina']) ? (int)$_GET['pagina'] : 0;

            $items_por_pagina=2;

            $item = $pagina * $items_por_pagina;

            $valor="";
            $where = "WHERE `Codigo Tracto`='$valor' AND `clase DT` = 'ZRAC'";


            if(isset($_POST['codigo_tracto']))
            {
                $_SESSION['doc'] = $_POST['doc'];
                $valor = $_SESSION['doc'];
                $where = "WHERE `Codigo Tracto`='$valor' AND `clase DT` = 'ZRAC'";

            } elseif(isset($_SESSION['doc'])){

                $valor = $_SESSION['doc'];

                $where = "WHERE `Codigo Tracto`='$valor' AND `clase DT` = 'ZRAC'";}



            $sql = "SELECT * FROM dt $where ORDER BY id_DT DESC LIMIT $item,$items_por_pagina";
            $resultado = $mysqli->query($sql);


            while ($consulta_dt = $resultado->fetch_array(MYSQLI_BOTH))

            {

                echo

                    '<tr>
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

            if($valor==""){
            $num_total=0;
            }else{
            $num_total=$mysqli->query("SELECT * FROM dt $where")->num_rows;}
            $num_paginas = ceil($num_total/$items_por_pagina);
            ?>

        </table>

</div>
    <nav aria-label="Page navigation example">
        <ul class="pagination justify-content-center">
            <li class="page-item">
                <?php


                if(!($pagina <1)): ?>
                    <a class="page-link" href="busqueda_dt.php?pagina=<?php echo $pagina-1; ?>" aria-label="Previous">
                        <span>Atrás</span>
                    </a>
                <?php endif;?>
            </li>
            <?php for($i=0;$i<$num_paginas;$i++){
                $estilo = "";
                if($pagina == $i)
                    $estilo = "class=\"page-item active\""
                ?>
                <li <?php echo $estilo; ?> ><a class="page-link" href="busqueda_dt.php?pagina=<?php echo $i; ?>"><?php echo $i+1; ?></a></li>
            <?php } ?>
            <li class="page-item">
                <?php if(($num_paginas-$pagina>1)): ?>
                    <a class="page-link" href="busqueda_dt.php?pagina=<?php echo $pagina+1; ?>" aria-label="Next">
                        <span>Siguiente</span>
                    </a>
                <?php endif;?>
            </li>
        </ul>
    </nav>
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
                $where = "";

                if(isset($_POST['codigo_tracto']))
                {
                    $valor = $_POST['doc'];
                    if(isset($valor)){
                        $where = "WHERE `Codigo Tracto`='$valor' AND `clase DT` = 'ZRAM'";
                    }

                    $sql = "SELECT * FROM dt $where ORDER BY id_DT DESC";
                    $resultado = $mysqli->query($sql);
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
                    }}
                ?>
            </table>

        </div>
    </div>
<?php include ('footer.php') ?>