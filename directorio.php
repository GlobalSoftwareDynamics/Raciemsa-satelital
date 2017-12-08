<?php
require 'conexion.php';


include ('header.php') ;
include('navbar.php');
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
                    <th>Codigo Sap</th>
                    <th>Nombre Completo</th>
                    <th>Cargo</th>
                    <th>Celular 1</th>
                    <th>Celular 2</th>
                    <th>Celular 3</th>
                    <th></th>
                    <th></th>
                </tr>
                </thead>
                <?php

                $sql_code="SELECT * FROM telefonos";
                $execute = $mysqli->query($sql_code) or die($mysqli->error);

                    while ($telefono = $execute->fetch_array(MYSQLI_BOTH))
                    {
                        echo'<tr>
						 <td>'.$telefono['id_Telefonos'].'</td>
						 <td>'.$telefono['Codigo Sap'].'</td>
						 <td>'.$telefono['Nombre'].'</td>
						 <td>'.$telefono['Cargo'].'</td>
						 <td>'.$telefono['celular1'].'</td>
						 <td>'.$telefono['celular2'].'</td>
						 <td>'.$telefono['celular3'].'</td>
						 </tr>';
                    }
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