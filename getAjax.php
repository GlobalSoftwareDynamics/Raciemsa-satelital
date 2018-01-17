<?php
include('session.php');


if (!empty($_POST['Colaborador'])) {
    $query = mysqli_query($link, "SELECT * FROM Colaboradores WHERE nombreSAP = '{$_POST['Colaborador']}'");
    while ($row = mysqli_fetch_array($query)) {
        $query1 = mysqli_query($link,"SELECT * FROM Telefonos WHERE codigoSAP = '{$row['codigoSAP']}'");
        $numrows = mysqli_num_rows($query1);
        if ($numrows>0){
            while ($fila1=mysqli_fetch_array($query1)){
                echo '
						
                    <div class="row">
                        <div class="col-10">
                            <div class="table-responsive" id="">
                                <table id="" class="table table-striped display">
                                    <thead>
                                    <tr class="text-center" id=""  >

                                        <th>Codigo Sap</th>
                                        <th>Nombre Completo</th>
                                        <th>Teléfono 1</th>
                                        <th>Teléfono 2</th>
                                        <th>Teléfono 3</th>
                                    </tr>
                                    <tr >
                                        <td>'.$fila1['codigoSAP'].'</td>
                                        <td>'.$row['nombreSAP'].'</td>
                                        <td>'.$fila1['Numero'].'</td>
                                    </tr>
                                    </thead>
                                </table>
                            </div>
                        </div>
                    </div>
               
						 
						 ';}
        }
    }
}

