<?php
require 'session.php';

include ('header.php') ;
include('navbar.php');

$result = mysqli_query($link,"SELECT * FROM colaboradores WHERE codigoSAP = '{$_POST['idSap']}'");
while($row = mysqli_fetch_array($result)) {

       ?>

    <section class="container margen">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header card-inverse card-info">
                        <div class="float-left">
                            <i class="fa fa-industry"></i>
                            Editar Registro
                        </div>
                        <div class="float-right">
                            <div class="dropdown">
                                <button form="form" name='volver' class='btn btn-light btn-sm'>Volver</button>
                                <button form="form" name='editar' class='btn btn-light btn-sm'>Guardar</button>
                            </div>
                        </div>
                    </div>
                    <form method="post" action="directorio.php" id="form">
                        <input type="hidden" name="idRegistro" value="<?php echo $_POST['idSap'];?>" >

                        <div class="spacer20"></div>
                        <div class="card-block">
                            <div class="row">
                            <div class="col-4">
                                <div class="form-inline ">
                                    <label for="nombreRegistro" class="col-6 ">Codigo Sap:</label>
                                    <input class="form-control col-5" type="text" id="nombreRegistro" name="nombreRegistro" value="<?php echo $row['codigoSAP'];?>" readonly>
                                </div>
                            </div>
                                <div class="col-8">
                                <div class="form-inline ">
                                    <label for="nombres" class="col-3 col-form-label">Nombre Sap:</label>
                                    <input class="form-control col-8" type="text" id="nombres" name="nombres" value="<?php echo $row['nombreSAP'];?>" readonly>
                                </div>
                                </div>
                                <br>
                                <br>
                                <br>

                                <div class="col-4">
                                    <div class="form-inline ">
                                        <label for="telefono1" class="col-6 ">Teléfono 1:</label>
                                        <input class="form-control col-5" type="text" id="telefono1" name="telefono1" value="<?php echo $row['numero_1'];?>">
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="form-inline ml-4">
                                        <label for="telefono2" class="col-4 ">Teléfono 2:</label>
                                        <input class="form-control col-5" type="text" id="telefono2" name="telefono2" value="<?php echo $row['numero_2'];?>">
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="form-inline ">
                                        <label for="telefono3" class="col-4 ">Teléfono 3:</label>
                                        <input class="form-control col-5" type="text" id="telefono3" name="telefono3" value="<?php echo $row['numero_3'];?>">
                                    </div>
                                </div>
                                <br>
                                <br>
                                <br>
                                <div class="col-1"></div>
                                <div class="col-5">
                                    <div class="form-inline">
                                        <label for="idCargo" class="col-4 col-form-label">Cargo:</label>

                                        <select class="form-control col-6" name="idCargo" id="idCargo" >
                                            <?php
                                            $result3=mysqli_query($link,"SELECT * FROM cargos WHERE idCargos = {$row['idCargos']}");
                                            $row3=mysqli_fetch_array($result3);
                                            ?>
                                            <option selected><?php echo $row3['nombre_cargo']?></option>
                                            <?php
                                            $result4 = mysqli_query($link, "SELECT * FROM cargos ORDER BY idCargos ASC");
                                            while ($row4 = mysqli_fetch_array($result4)){
                                                echo "<option value='{$row4['idCargos']}'>{$row4['nombre_cargo']}</option>";
                                            }

                                            ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-5">
                                    <div class="form-inline">
                                        <label for="idArea" class="col-4 col-form-label">Cargo:</label>

                                        <select class="form-control col-6" name="idArea" id="idArea">
                                            <?php

                                            $result6=mysqli_query($link,"SELECT * FROM areas WHERE idAreas = {$row['idAreas']}");
                                            $row6=mysqli_fetch_array($result6);
                                            ?>
                                            <option selected><?php echo $row6['nombre_area']?></option>
                                            <?php
                                            $result7 = mysqli_query($link, "SELECT * FROM areas ORDER BY idAreas ASC");
                                            while ($fila2 = mysqli_fetch_array($result7)){

                                                echo "<option value='{$fila2['idAreas']}'>{$fila2['nombre_area']}</option>";
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-1"></div>
                            </div>
                        </div>
                        <br>
                    </form>
                </div>
            </div>
        </div>
    </section>







<?php
}

include ('footer.php') ?>
