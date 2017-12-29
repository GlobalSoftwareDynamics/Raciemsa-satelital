<div class="container" id="verde">
    <br>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header card-inverse card-info text-center">
                    <h7 class="font-italic">Búsqueda Dts por Codigo Externo</h7>
                </div>
            </div>
            <div class="card-block" >
                <div class="col-12">
                    <div class="spacer15"></div>
                    <ul class="nav nav-tabs" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" data-toggle="tab" href="#ZRAC" role="tab">DTs ZRAC</a>
                        </li>
                        <li>
                            <a class="nav-link" data-toggle="tab" href="#ZRAM" role="tab">DTs ZRAM</a>
                        </li>
                        <li class="nav-item ml-auto">

                            <span>Ver</span>
                            <select name="state" id="maxRows">
                                <option value="5" >5</option>
                                <option value="10">10</option>
                                <option value="20">20</option>
                                <option value="50">50</option>
                            </select>
                            <span>registros</span>

                        </li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane active" id="ZRAC" role="tabpanel">
                            <span class="spacer15"></span>
                            <div class="table-responsive" id="verde2">
                                <table id="mytable" class="table table-striped display">
                                    <thead>
                                    <tr class="text-center" id="acople1"  >

                                        <th>Numero DT</th>
                                        <th>Fecha DT</th>
                                        <th>Codigo Acople</th>
                                        <th>Placa Acople</th>
                                        <th>Codigo Sap</th>
                                        <th>Nombre</th>


                                    </tr>
                                    </thead>
                                    <?php
                                    $where = "";
                                    $where2 = "";



                                    if(isset($valor2)){
                                        $where = "WHERE `cod_tracto`='$valor2' AND `clase DT` = 'ZRAC'";
                                        $where2 = "WHERE `cod_tracto`='$valor2' AND `clase DT` = 'ZRAM'";


                                    $sql = "SELECT * FROM dt $where";
                                    $sql2 = "SELECT * FROM dt $where2";
                                    $resultado = $mysqli->query($sql);
                                    $resultado2 = $mysqli->query($sql2);


                                    while ($consulta_dt = $resultado->fetch_array(MYSQLI_BOTH))
                                    {
                                        echo'

                     <tr>
                     <td>'.$consulta_dt['numero DT'].'</td>
                     <td>'.$consulta_dt['Fecha Inicio'].'</td>
                     <td>'.$consulta_dt['Codigo Acople'].'</td>
                     <td>'.$consulta_dt['Placa Acople'].'</td>
                     <td>'.$consulta_dt['Codigo Sap'].'</td>
                     <td>'.$consulta_dt['Nombre'].'</td>
                     </tr>';}}

                                    ?>
                                </table>
                            </div>
                        </div>
                        <div class="tab-pane" id="ZRAM" role="tabpanel">
                            <span class="spacer15"></span>
                            <div class="table-responsive">
                                <table class="table table-striped ">
                                    <thead>
                                    <tr class="text-center">

                                        <th>Numero DT</th>
                                        <th>Fecha DT</th>
                                        <th>Codigo Acople</th>
                                        <th>Placa Acople</th>
                                        <th>Codigo Sap</th>
                                        <th>Nombre</th>


                                    </tr>
                                    </thead>
                                    <?php



                                    while ($consulta2 = $resultado2->fetch_array(MYSQLI_BOTH))
                                    {
                                        echo'<tr>
						 
						 <td>'.$consulta2['numero DT'].'</td>
						 <td>'.$consulta2['Fecha Inicio'].'</td>
						 <td>'.$consulta2['Codigo Acople'].'</td>
						 <td>'.$consulta2['Placa Acople'].'</td>
						 <td>'.$consulta2['Codigo Sap'].'</td>
						 <td>'.$consulta2['Nombre'].'</td>
						 <td>'.$consulta2['Clase DT'].'</td>
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
</div>
