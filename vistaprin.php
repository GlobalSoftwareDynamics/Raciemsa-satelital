<?php
require 'conexion.php';
require 'paginacion.php';
include ('header.php') ?>

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
                    <?php if(!($pagina <1)): ?>
                    <a class="page-link" href="index.php?pagina=<?php echo $pagina-1; ?>" aria-label="Previous">
                        <span>Atrás</span>
                    </a>
                    <?php endif;?>
                </li>
                <?php for($i=0;$i<$num_paginas;$i++){
                $estilo = "";
                if($pagina == $i)
                    $estilo = "class=\"page-item active\""
                    ?>
                <li <?php echo $estilo; ?> ><a class="page-link" href="index.php?pagina=<?php echo $i; ?>"><?php echo $i+1; ?></a></li>
                        <?php } ?>
                <li class="page-item">
                    <?php if(($num_paginas-$pagina>1)): ?>
                    <a class="page-link" href="index.php?pagina=<?php echo $pagina+1; ?>" aria-label="Next">
                       <span>Siguiente</span>
                    </a>
                    <?php endif;?>
                </li>
            </ul>
        </nav>
    </div>
  </div>



<?php include ('footer.php') ?>