<?php

require 'conexion.php';

$where = "";

if(!empty($_POST))
{
    $valor = $_POST['campo'];
    if(!empty($valor)){
        $where = "WHERE Codigo Tracto LIKE '%$valor'";
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
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/estilos.css">
</head>
<body>

<div class="container">
    <div class="row justify-content-center">

    <h2>Curso de PHP y MySQL</h2>

    </div>
    <div class="row">
        <a href="nuevo.php" class="btn btn-primary">Nuevo Registro
        </a>

        <form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST">
            <b>Nombre:</b><input type="text" id="campo" name="campo">
            <input type="submit" id="enviar" name="enviar" value="Buscar" class="btn btn-info">
        </form>
    </div>

    <br>

    <div class="row table-responsive">
        <table class="table table-striped">
        <thead>
        <tr>
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
            <th>ID</th>
            <th>ID</th>
        </tr>
        </thead>

        <tbody>
        <?php while($row = $resultado->fetch_array(MYSQLI_ASSOC))
            {?>
        <tr>
            <td><?php echo $row['id_DT'] ?></td>
            <td><?php echo $row['numero DT'] ?></td>
            <td><?php echo $row['Fecha Inicio'] ?></td>
            <td><?php echo $row['Codigo Tracto'] ?></td>
            <td><?php echo $row['Placa Tracto'] ?></td>
            <td><?php echo $row['Codigo Acople'] ?></td>
            <td><?php echo $row['Placa Acople'] ?></td>
            <td><?php echo $row['Codigo Sap'] ?></td>
            <td><?php echo $row['Nombre'] ?></td>
            <td><?php echo $row['Clase DT'] ?></td>
            <td><a href="modificar.php?id_DT=<?php echo $row['id_DT']; ?>">
                    <i class="fa fa-pencil" aria-hidden="true"></i></a></td>
            <td><a href="#" data-href="eliminar.php?id_DT=<?php echo $row['id_DT']; ?>">
                    <i class="fa fa-trash-o" aria-hidden="true"></i></a></td>

        </tr>
        <?php } ?>
        </tbody>

        </table>
    </div>
</div>

<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#confirm-delete">
    Launch demo modal
</button>

<div class="modal fade" id="confirm-delete" >
    <div class="modal-dialog">
        <div class="modal-content">

            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel">Eliminar Registro</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>

            <div class="modal-body">
                ¿Desea eliminar este registro?
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                <a class="btn btn-danger btn-ok">Delete</a>
            </div>
        </div>
    </div>
</div>


<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/
Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-
    vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
<script> src="js/bootstrap.min.js"</script>

</body>
</html>