<?php

require 'conexion.php';
require 'paginacion.php';

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

<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>MASTER-PHP</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/estilos.css">
</head>
<body>

<div class="container">
    <div class="row justify-content-center">

    <h2><br>MASTER-RACIEMSA</h2>

    </div>
    <div class="row">
        <a href="nuevo.php" class="btn btn-primary">Nuevo Registro
        </a>

        <form class="ml-auto" action="<?php $_SERVER['PHP_SELF']; ?>" method="POST">
            <b>Nombre:</b><input type="text" id="campo" name="campo">
            <input type="submit" id="enviar" name="enviar" value="Buscar" class="btn btn-info">
        </form>
    </div>

    <br>

    <div class="row table-responsive">
        <table class="table table-striped">
        <thead>
        <tr class="text-center">
            <th>ID</th>
            <th>Numero DT</th>
            <th>Fecha DT</th>
            <th>Codigo Tracto</th>
            <th>Placa Tracto</th>
            <th>Codigo Acople</th>
            <th>Placa Acople</th>
            <th>Codigo Sap</th>
            <th>Nombre</th>
            <th>Clase DT</th>
            <th></th>
            <th></th>
        </tr>
        </thead>

        <tbody>
        <?php do {?>
        <tr>
            <td><?php echo $dt['id_DT'] ?></td>
            <td><?php echo $dt['numero DT'] ?></td>
            <td><?php echo $dt['Fecha Inicio'] ?></td>
            <td><?php echo $dt['Codigo Tracto'] ?></td>
            <td><?php echo $dt['Placa Tracto'] ?></td>
            <td><?php echo $dt['Codigo Acople'] ?></td>
            <td><?php echo $dt['Placa Acople'] ?></td>
            <td><?php echo $dt['Codigo Sap'] ?></td>
            <td><?php echo $dt['Nombre'] ?></td>
            <td><?php echo $dt['Clase DT'] ?></td>
            <td><a href="modificar.php?id_DT=<?php echo $dt['id_DT']; ?>">
                    <i class="fa fa-pencil" aria-hidden="true"></i></a></td>
            <td><a href="#" data-href="eliminar.php?id_DT=<?php echo $dt['id_DT']; ?>">
                    <i class="fa fa-trash-o" aria-hidden="true"></i></a></td>

        </tr>
        <?php } while($dt = $execute->fetch_assoc()); ?>
        </tbody>

        </table>
        <nav aria-label="Page navigation example">
            <ul class="pagination justify-content-center">
                <li class="page-item">
                    <a class="page-link" href="index.php?pagina=0" aria-label="Previous">
                        <span aria-hidden="true">&laquo;</span>
                        <span class="sr-only">Previous</span>
                    </a>
                </li>
                <?php for($i=0;$i<$num_paginas;$i++){
                $estilo = "";
                if($pagina == $i)
                    $estilo = "class=\active\""
                    ?>
                <li class="page-item"><a class="page-link" href="index.php?pagina=<?php echo $i; ?>"><?php echo $i+1; ?></a></li>
                        <?php } ?>
                <li class="page-item">
                    <a class="page-link" href="index.php?pagina=<?php echo $num_paginas-1; ?>" aria-label="Next">
                        <span aria-hidden="true">&raquo;</span>
                        <span class="sr-only">Next</span>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
  </div>



<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/
Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-
    vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
<script> src="js/bootstrap.min.js"</script>

</body>
</html>