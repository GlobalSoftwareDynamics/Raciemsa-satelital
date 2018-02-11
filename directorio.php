<?php
require 'session.php';


include ('header.php') ;
include('navbar.php');


if (isset($_POST['editar'])){

    $query = mysqli_query($link,"UPDATE colaboradores SET idCargos = '{$_POST['idCargo']}' WHERE codigoSAP = '{$_POST['idRegistro']}'");
    $query2 = mysqli_query($link,"UPDATE colaboradores SET idAreas = '{$_POST['idArea']}' WHERE codigoSAP = '{$_POST['idRegistro']}'");

}

if (isset($_POST['guardar'])){

    $query = mysqli_query($link,"INSERT INTO colaboradores (codigoSAP, nombreSAP, idTipoUsuario, usuario, contraseña, idCargos, idAreas, numero_1, numero_2, numero_3) VALUES ('{$_POST['nuevoSap']}','{$_POST['nuevonombre']}',2,'' ,'','{$_POST['nuevocargo']}','{$_POST['nuevarea']}','{$_POST['nuevocel1']}','{$_POST['nuevocel2']}','{$_POST['nuevocel3']}')");

}

    if (isset($_POST['guardar2'])){

    $query = mysqli_query($link,"INSERT INTO contactos (idContactos, nombre_completo, funcion_cargo, lugar_trabajo) VALUES (NULL,'{$_POST['nombrex']}','{$_POST['oficio']}','{$_POST['lugar']}')");


}

if (isset($_POST['borrar'])){

    $query3 = mysqli_query($link,"SELECT * FROM dt WHERE codigoSAP = '{$_POST['idSap']}'");
    $cnt_rows = mysqli_num_rows($query3);

    if ($cnt_rows > 0){
        echo "<script>
        $(document).ready(function(){
        $('#myModal').modal('show');})
            </script>";

    }else{

    $query4 = mysqli_query($link,"DELETE FROM colaboradores WHERE codigoSAP = '{$_POST['idSap']}'");


}}

?>
    <script>

        function myFunction() {
            // Declare variables
            var input, input2, input3, input4, filter, filter2, filter3, filter4, table, tr, td, td2, td3, td4, td5, i;
            input = document.getElementById("idSAP");
            input2 = document.getElementById("nombre_apellido");
            input3 = document.getElementById("cargo");
            input4 = document.getElementById("tel");
            filter = input.value.toUpperCase();
            filter2 = input2.value.toUpperCase();
            filter3 = input3.value.toUpperCase();
            filter4 = input4.value.toUpperCase();
            table = document.getElementById("myTable");
            tr = table.getElementsByTagName("tr");

            // Loop through all table rows, and hide those who don't match the search query
            for (i = 0; i < tr.length; i++) {
                td = tr[i].getElementsByTagName("td")[0];
                td2 = tr[i].getElementsByTagName("td")[1];
                td3 = tr[i].getElementsByTagName("td")[2];
                td4 = tr[i].getElementsByTagName("td")[3];
                td5 = tr[i].getElementsByTagName("td")[4];

                if ((td)&&(td2)) {

                    if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
                        if(td2.innerHTML.toUpperCase().indexOf(filter2) > -1){
                            if(td3.innerHTML.toUpperCase().indexOf(filter3) > -1) {
                               if(td5.innerHTML.toUpperCase().indexOf(filter4) > -1){
                                    tr[i].style.display = "";
                                }else{
                                    tr[i].style.display = "none";
                                }
                            }else{
                                tr[i].style.display = "none";
                            }
                        }else{
                            tr[i].style.display = "none";
                        }

                    } else {
                        tr[i].style.display = "none";
                    }
                }
            }
        }

        $(document).bind("contexmenu",function (e) {

            return false;
        });

    </script>

    <section class="container margen" >
        <div class="row">
            <div class="col-12">
    <div class="card">
        <div class="card-header ">
        <i class="fa fa-list"></i>
        Directorio de Telefónos y Listado de Personal

        <span class="float-right">&nbsp;&nbsp;&nbsp;&nbsp;</span>
        <span class="float-right">
                    <button href="#collapsed" class="btn btn-light btn-sm" data-toggle="collapse">Mostrar Filtros</button>
                </span>
            <div class="float-right">
                <div class="dropdown">
                    <button class="btn btn-light btn-sm dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Acciones
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="nuevo_contacto.php">Agregar Nuevo Registro</a>
                    </div>
                </div>
            </div>
        </div>
    <div class="card-block">
        <div class="row">
            <div class="col-12">
                <div id="collapsed" class="collapse">
                    <form class="form-inline justify-content-center" method="post" action="#">
                        <label class="sr-only" for="idSAP">Codigo</label>
                        <input type="text" class="form-control mt-2 mb-2 mr-2 " id="idSAP" placeholder="Código Sap" onkeyup="myFunction()">
                        <label class="sr-only" for="nombre_apellido">Nombre Completo</label>
                        <input type="text" class="form-control mt-2 mb-2 mr-2" id="nombre_apellido" placeholder="Búsqueda Nombre" onkeyup="myFunction()">
                        <label class="sr-only" for="cargo">Cargo</label>
                        <input type="text" class="search-key form-control mt-2 mb-2 mr-2" id="cargo" placeholder="Área o Cargo" onkeyup="myFunction()">
                        <label class="sr-only" for="tel">Area</label>
                        <input type="text" class="search-key form-control mt-2 mb-2 mr-2" id="tel" placeholder="Teléfono" onkeyup="myFunction()">
                        <input type="submit" class="btn btn-primary" value="Limpiar" style="padding-left:15px; padding-right: 15px;">
                    </form>
                </div>
            </div>
        </div>
        <div class="spacer10"></div>
        <div class="row">
            <div class="col-12">
                <div class="table-responsive">
            <table class="table table-striped table-bordered" id="myTable">
                <thead class="thead-default">
                <tr class="text-center">

                    <th class="context-menu-one">Codigo Sap</th>
                    <th>Nombre Completo</th>
                    <th>Cargo</th>
                    <th>Área</th>
                    <th>Celular1</th>

                </tr>
                </thead>
                <?php

                $sql= mysqli_query($link,"SELECT * FROM colaboradores ");
                    while ($colaborador = mysqli_fetch_array($sql)){

                            $sql2=mysqli_query($link,"SELECT * FROM cargos WHERE idCargos='{$colaborador['idCargos']}'");
                            while ($cargo = mysqli_fetch_array($sql2)){

                               $sql3=mysqli_query($link,"SELECT * FROM areas WHERE idAreas='{$colaborador['idAreas']}'");
                                    while ($area = mysqli_fetch_array($sql3)){


                        echo'<tr class="text-center">
						 
						 <td class="edicion">'.$colaborador['codigoSAP'].'</td>
						 <td>'.$colaborador['nombreSAP'].'</td>
						 <td>'.$cargo['nombre_cargo'].'</td>
						 <td>'.$area['nombre_area'].'</td>
						 <td>'.$colaborador['numero_1'].'</td>
                                            </tr>';
                                        }}}


                $sql5=mysqli_query($link,"SELECT * FROM contactos");
                while ($contacto = mysqli_fetch_array($sql5)){

                                    echo'<tr class="text-center">
						 
						 <td></td>
						 <td>'.$contacto['nombre_completo'].'</td>
						 <td>'.$contacto['funcion_cargo'].'</td>
						 <td>'.$contacto['lugar_trabajo'].'</td>
						 <td>'.$contacto['Numero_1'].'</td>
						 </tr>';

						}
                ?>

            </table>
        </div>
    </div>
    </div>
    </div>
    </div>
            </div>
        </div>
            </section>

    <form method="post" name="fsap" id="fsap" action="" >
    <nav id="contextMenu" class="dropdown clearfix">
            <input type='hidden' name="idSap" >

        <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu" style="display:block;position:static;margin-bottom:5px;">
            <li><i class="fa fa-edit ml-3"></i> <button class="btn-sm btn-outline-success boton" tabindex="-1"  formaction="editarDirectorio.php" > Editar Registro</button></li>
            <li><i class="fa fa-times ml-3"></i> <button name='borrar' type='button' class="btn-sm btn-outline-danger boton" tabindex="-1" data-toggle="modal" data-target="#modaleliminar" >Eliminar</button></li>
        </ul>
    </nav>

    <div class="modal fade" id="modaleliminar" tabindex="-1" role="dialog" aria-labelledby="modaleliminar" aria-hidden="true">
        <div class="modal-dialog modal-sm" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title text-center">¿Está seguro de eliminar este contacto?</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-footer justify-content-center">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-primary" formaction="directorio.php" value="Submit" name="borrar">Eliminar</button>
                </div>
            </div>
        </div>
    </div>
    </form>

    <div id="myModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
                No se puede eliminar el registro
            </div>
        </div>
    </div>

<?php include ('footer.php') ?>