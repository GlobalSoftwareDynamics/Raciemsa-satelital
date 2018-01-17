<div class="container" id="azul">
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
                            <div class="table-responsive" id="azul2">
                                <table id="mytable" class="table table-striped display">
                                    <thead>
                                    <tr class="text-center" id="tracto1"  >

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


                                    if(isset($valor)){
                                        $where = "WHERE `cod_tracto`='$valor' AND `clase DT` = 'ZRAC'";
                                        $where2 = "WHERE `cod_tracto`='$valor' AND `clase DT` = 'ZRAM'";



                                    $sql = "SELECT * FROM dt $where";
                                    $sql2 = "SELECT * FROM dt $where2";

                                    $resultado = $link->query($sql);
                                    $resultado2 = $link->query($sql2);


                                    while ($consulta_dt = $resultado->fetch_array(MYSQLI_BOTH))
                                    {

                                     $where3 = "WHERE `numeroDT`='{$consulta_dt['numeroDT']}'";
                                     $sql3 = "SELECT * FROM dt_has_acople $where3";
                                     $resultado3 = $link->query($sql3);

                                     while ($consulta3 = $resultado3->fetch_array(MYSQLI_BOTH))
                                     {
                                     $where5 = "WHERE `codigoSAP`='{$consulta_dt['codigoSAP']}'";
                                     $sql5 = "SELECT * FROM colaboradores $where5";
                                     $resultado5 = $link->query($sql5);

                                     while ($consulta5 = $resultado5->fetch_array(MYSQLI_BOTH))
                                     {
                                     $where7 = "WHERE `cod_acople`='{$consulta3['cod_acople']}'";
                                     $sql7 = "SELECT * FROM acople $where7";
                                     $resultado7 = $link->query($sql7);

                                      while ($consulta7 = $resultado7->fetch_array(MYSQLI_BOTH))
                                      {

                                            echo'
                                         <tr >
                                         <td>'.$consulta_dt['numeroDT'].'</td>
                                         <td>'.$consulta_dt['FechaInicio'].'</td>   
                                         <td>'.$consulta3['cod_acople'].'</td>
                                         <td>'.$consulta7['placa_acople'].'</td>
                                         <td>'.$consulta_dt['codigoSAP'].'</td>
                                         <td>'.$consulta5['nombreSAP'].'</td> 
                                         </tr>';}}}}

                                    ?>

                                </table>
                            </div>
                        </div>
                        <div class="tab-pane" id="ZRAM" role="tabpanel">
                            <span class="spacer15"></span>
                            <div class="table-responsive" id="azul2">
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
                                        $where4 = "WHERE `numeroDT`='{$consulta2['numeroDT']}'";
                                        $sql4 = "SELECT * FROM dt_has_acople $where4";
                                        $resultado4 = $link->query($sql4);
                                        while ($consulta4 = $resultado4->fetch_array(MYSQLI_BOTH))
                                        {
                                            $where6 = "WHERE `codigoSAP`='{$consulta2['codigoSAP']}'";
                                            $sql6 = "SELECT * FROM colaboradores $where6";
                                            $resultado6 = $link->query($sql6);
                                    while ($consulta6 = $resultado6->fetch_array(MYSQLI_BOTH))
                                    {
                                        $where8 = "WHERE `cod_acople`='{$consulta4['cod_acople']}'";
                                        $sql8 = "SELECT * FROM acople $where8";
                                        $resultado8 = $link->query($sql8);

                                        while ($consulta8 = $resultado8->fetch_array(MYSQLI_BOTH))
                                        {

                                        echo'<tr>
						 
						 <td>'.$consulta2['numeroDT'].'</td>
						 <td>'.$consulta2['FechaInicio'].'</td>
						 <td>'.$consulta4['cod_acople'].'</td>
						 <td>'.$consulta8['placa_acople'].'</td>
						 <td>'.$consulta2['codigoSAP'].'</td>
						 <td>'.$consulta6['nombreSAP'].'</td>
						 </tr>';}}}}}

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
