<div class="container" id="rojo">
    <br>
    <div class="row">
        <div class="col-12">
            <div class="card-header py-1">
                <div class="text-center">

                    <?php

                    $result = mysqli_query($link,"SELECT * FROM colaboradores WHERE nombreSAP='$valor3'");
                    $row = mysqli_fetch_array($result);
                    $result2 = mysqli_query($link,"SELECT * FROM Telefonos WHERE codigoSAP = '{$row['codigoSAP']}'");
                    $row2 = mysqli_fetch_array($result2);

                    ?>
                    <label class="ml-4">SAP: </label>
                    <span ><?php echo $row['codigoSAP'] ?></span>
                    <span class="ml-3"><?php echo $valor3 ?> </span>
                    <span class="ml-4"><?php echo $row2['Numero'] ?></span>

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
                            <div class="table-responsive" id="rojo2">
                                <table id="mytable" class="table table-striped display">
                                    <thead>
                                    <tr class="text-center" id="acople1"  >

                                        <th>Numero DT</th>
                                        <th>Fecha DT</th>
                                        <th>Codigo Tracto</th>
                                        <th>Placa Tracto</th>
                                        <th>Codigo Acople</th>
                                        <th>Placa Acople</th>


                                    </tr>
                                    </thead>
                                    <?php
                                    $where = "";
                                    $where2 = "";


                                    if(isset($valor3)){
                                        $where = "WHERE `nombreSAP`='$valor3'" ;
                                        $where2 = "WHERE `nombreSAP`='$valor3'";

                                        $sql = "SELECT * FROM colaboradores $where";
                                        $sql2 = "SELECT * FROM colaboradores $where2";
                                        $resultado = $link->query($sql);
                                        $resultado2 = $link->query($sql2);


                                        while ($consulta_dt = $resultado->fetch_array(MYSQLI_BOTH))
                                        {
                                            $where3 = "WHERE `codigoSAP`='{$consulta_dt['codigoSAP']}' AND `clase DT` = 'ZRAC'";
                                            $sql3 = "SELECT * FROM dt $where3";
                                            $resultado3 = $link->query($sql3);

                                            while ($consulta3 = $resultado3->fetch_array(MYSQLI_BOTH))
                                            {
                                                $where5 = "WHERE `cod_tracto`='{$consulta3['cod_tracto']}'";
                                                $sql5 = "SELECT * FROM tracto $where5";
                                                $resultado5 = $link->query($sql5);

                                                while ($consulta5 = $resultado5->fetch_array(MYSQLI_BOTH))
                                                {
                                                    $where7 = "WHERE `numeroDT`='{$consulta3['numeroDT']}'";
                                                    $sql7 = "SELECT * FROM dt_has_acople $where7";
                                                    $resultado7 = $link->query($sql7);

                                                    while ($consulta7 = $resultado7->fetch_array(MYSQLI_BOTH))
                                                    {
                                                    $where9 = "WHERE `cod_acople`='{$consulta7['cod_acople']}'";
                                                    $sql9 = "SELECT * FROM acople $where9";
                                                    $resultado9 = $link->query($sql9);

                                                    while ($consulta9 = $resultado9->fetch_array(MYSQLI_BOTH))
                                                    {

                                                        echo'
                                         <tr >
                                         <td>'.$consulta3['numeroDT'].'</td>
                                         <td>'.$consulta3['FechaInicio'].'</td>   
                                         <td>'.$consulta3['cod_tracto'].'</td>
                                         <td>'.$consulta5['placa_tracto'].'</td>
                                         <td>'.$consulta7['cod_acople'].'</td>
                                         <td>'.$consulta9['placa_acople'].'</td> 
                                         </tr>';}}}}}


                                    ?>
                                </table>
                            </div>
                        </div>
                        <div class="tab-pane" id="ZRAM" role="tabpanel">
                            <span class="spacer15"></span>
                            <div class="table-responsive" id="rojo2">
                                <table class="table table-striped ">
                                    <thead>
                                    <tr class="text-center">

                                        <th>Numero DT</th>
                                        <th>Fecha DT</th>
                                        <th>Codigo Tracto</th>
                                        <th>Placa Tracto</th>
                                        <th>Codigo Acople</th>
                                        <th>Placa Acople</th>


                                    </tr>
                                    </thead>
                                    <?php

                                    while ($consulta2 = $resultado2->fetch_array(MYSQLI_BOTH))
                                    {
                                        $where4 = "WHERE `codigoSAP`='{$consulta2['codigoSAP']}' AND `clase DT` = 'ZRAM'";
                                        $sql4 = "SELECT * FROM dt $where4";
                                        $resultado4 = $link->query($sql4);

                                        while ($consulta4 = $resultado4->fetch_array(MYSQLI_BOTH))
                                        {
                                            $where6 = "WHERE `cod_tracto`='{$consulta4['cod_tracto']}'";
                                            $sql6 = "SELECT * FROM tracto $where6";
                                            $resultado6 = $link->query($sql6);

                                            while ($consulta6 = $resultado6->fetch_array(MYSQLI_BOTH))
                                            {
                                                $where8 = "WHERE `numeroDT`='{$consulta4['numeroDT']}'";
                                                $sql8 = "SELECT * FROM dt_has_acople $where8";
                                                $resultado8 = $link->query($sql8);

                                                while ($consulta8 = $resultado8->fetch_array(MYSQLI_BOTH))
                                                {
                                                    $where10 = "WHERE `cod_acople`='{$consulta8['cod_acople']}'";
                                                    $sql10 = "SELECT * FROM acople $where10";
                                                    $resultado10 = $link->query($sql10);

                                                    while ($consulta10 = $resultado10->fetch_array(MYSQLI_BOTH))
                                                    {

                                                        echo'
                                         <tr >
                                         <td>'.$consulta4['numeroDT'].'</td>
                                         <td>'.$consulta4['FechaInicio'].'</td>   
                                         <td>'.$consulta4['cod_tracto'].'</td>
                                         <td>'.$consulta6['placa_tracto'].'</td>
                                         <td>'.$consulta8['cod_acople'].'</td>
                                         <td>'.$consulta10['placa_acople'].'</td> 
                                         </tr>';}}}}}}

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
