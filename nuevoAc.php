<div class="container" id="verde">
    <br>
    <div class="row">
        <div class="col-12">
            <div class="card-header py-1">
                <div class="text-center">
                    Búsqueda:
                    <?php

                    $result = mysqli_query($link,"SELECT * FROM acople WHERE cod_acople='$valor2'");
                    $row = mysqli_fetch_array($result);

                    ?>
                    <label class="ml-4"> Cod. Externo: </label>
                    <span ><?php echo $valor2?></span>
                    <label class="ml-3">Placa: </label>
                    <span ><?php echo $row['placa_acople'] ?> </span>
                </div>
            </div>
            <div class="card-block" >
                <div class="col-12">
                    <div class="spacer10"></div>
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
                                        <th>Codigo Tracto</th>
                                        <th>Placa Tracto</th>
                                        <th>Codigo Sap</th>
                                        <th>Nombre</th>


                                    </tr>
                                    </thead>
                                    <?php
                                    $where = "";


                                    if(isset($valor2)){
                                        $where = "WHERE `cod_acople`='$valor2' ";
                                        $where2 = "WHERE `cod_acople`='$valor2' ";


                                    $sql = "SELECT * FROM dt_has_acople $where";
                                    $sql2 = "SELECT * FROM dt_has_acople $where2";

                                    $resultado = $link->query($sql);
                                    $resultado2 = $link->query($sql);


                                    while ($consulta_dt = $resultado->fetch_array(MYSQLI_BOTH))
                                    {
                                        $where3 = "WHERE `numeroDT`='{$consulta_dt['numeroDT']}' AND `clase DT` = 'ZRAC'";
                                        $sql3 = "SELECT * FROM dt $where3";
                                        $resultado3 = $link->query($sql3);

                                        while ($consulta3 = $resultado3->fetch_array(MYSQLI_BOTH))
                                        {
                                            $where5 = "WHERE `codigoSAP`='{$consulta3['codigoSAP']}'";
                                            $sql5 = "SELECT * FROM colaboradores $where5";
                                            $resultado5 = $link->query($sql5);

                                            while ($consulta5 = $resultado5->fetch_array(MYSQLI_BOTH))
                                            {
                                                $where7 = "WHERE `cod_tracto`='{$consulta3['cod_tracto']}'";
                                                $sql7 = "SELECT * FROM tracto $where7";
                                                $resultado7 = $link->query($sql7);

                                                while ($consulta7 = $resultado7->fetch_array(MYSQLI_BOTH))
                                                {

                                                    echo'
                                         <tr >
                                         <td>'.$consulta3['numeroDT'].'</td>
                                         <td>'.$consulta3['FechaInicio'].'</td>   
                                         <td>'.$consulta3['cod_tracto'].'</td>
                                         <td>'.$consulta7['placa_tracto'].'</td>
                                         <td>'.$consulta3['codigoSAP'].'</td>
                                         <td>'.$consulta5['nombreSAP'].'</td> 
                                         </tr>';}}}}




                                    ?>
                                </table>
                            </div>
                        </div>
                        <div class="tab-pane" id="ZRAM" role="tabpanel">
                            <span class="spacer15"></span>
                            <div class="table-responsive" id="verde2">
                                <table class="table table-striped ">
                                    <thead>
                                    <tr class="text-center">

                                        <th>Numero DT</th>
                                        <th>Fecha DT</th>
                                        <th>Codigo Tracto</th>
                                        <th>Placa Tracto</th>
                                        <th>Codigo Sap</th>
                                        <th>Nombre</th>


                                    </tr>
                                    </thead>
                                    <?php

                                    while ($consulta2 = $resultado2->fetch_array(MYSQLI_BOTH))
                                    {
                                    $where4 = "WHERE `numeroDT`='{$consulta2['numeroDT']}' AND `clase DT` = 'ZRAM'";
                                    $sql4 = "SELECT * FROM dt $where4";
                                    $resultado4 = $link->query($sql4);

                                    while ($consulta4 = $resultado4->fetch_array(MYSQLI_BOTH))
                                    {
                                    $where6 = "WHERE `codigoSAP`='{$consulta4['codigoSAP']}'";
                                    $sql6 = "SELECT * FROM colaboradores $where6";
                                    $resultado6 = $link->query($sql6);

                                    while ($consulta6 = $resultado6->fetch_array(MYSQLI_BOTH))
                                    {
                                    $where8 = "WHERE `cod_tracto`='{$consulta4['cod_tracto']}'";
                                    $sql8 = "SELECT * FROM tracto $where8";
                                    $resultado8 = $link->query($sql8);

                                    while ($consulta8 = $resultado8->fetch_array(MYSQLI_BOTH))
                                    {


                                        echo'<tr>
						 
						 <td>'.$consulta4['numeroDT'].'</td>
						 <td>'.$consulta4['FechaInicio'].'</td>
						 <td>'.$consulta4['cod_tracto'].'</td>
						 <td>'.$consulta8['placa_tracto'].'</td>
						 <td>'.$consulta4['codigoSAP'].'</td>
						 <td>'.$consulta6['nombreSAP'].'</td>
						 </tr>';
                                    }}}}}
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
