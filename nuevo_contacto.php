<?php
require 'session.php';

include ('header.php') ;
include('navbar.php');


     ?>

<script>

    $(document).ready(function(){

$("#toggle1").click(function () {
    $("#b1").toggle();
    $("#b2").toggle();
    $("#oculto1").toggle();

        });

$("#toggle2").click(function () {
    $("#b1").toggle();
    $("#b2").toggle();
    $("#oculto2").toggle();

});
});

</script>

    <section class="container margen">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header card-inverse card-info">
                        <div class="float-left">
                            <i class="fa fa-industry"></i>
                            Nuevo Registro de Contacto
                        </div>
                        <div class="float-right">
                            <div class="dropdown">
                                <button id="b1" form="form" name='guardar' class='btn btn-light btn-sm' style="display: inline" >Guardar</button>
                                <button id="b2" form="form2" name='guardar2' class='btn btn-light btn-sm' style="display: none">Guardar</button>
                                <input name="volver" type="button" class='btn btn-light btn-sm' onClick="history.back()" value="Regresar">
                            </div>
                        </div>
                    </div>


                        <div class="spacer20"></div>
                        <div class="card-block">
                            <ul class="nav nav-tabs ml-3 mr-4" role="tablist">
                                <li class="nav-item">
                                    <a id="toggle1" class="nav-link active" data-toggle="tab" href="#ZRAC" role="tab">RACIEMSA</a>
                                </li>
                                <li class="nav-item">
                                    <a id="toggle2" class="nav-link" data-toggle="tab" href="#ZRAM" role="tab">EXTERNO</a>
                                </li>
                            </ul>
                        <div class="tab-content">
                            <div class="tab-pane active" id="ZRAC" role="tabpanel">
                                <form method="post" action="directorio.php" id="form">
                                <span class="spacer15"></span>
                            <div id="" class="row">
                            <div class="col-4">
                                <div class="form-inline ">
                                    <label for="nuevoSap" class="col-6 ">Codigo Sap:</label>
                                    <input class="form-control col-5" type="text" id="nuevoSap" name="nuevoSap" required>
                                </div>
                            </div>
                                <div class="col-8">
                                <div class="form-inline ">
                                    <label for="nuevonombre" class="col-3 col-form-label">Nombre Sap:</label>
                                    <input class="form-control col-8" type="text" id="nuevonombre" name="nuevonombre" required>
                                </div>
                                </div>
                                <br>
                                <br>
                                <br>

                                <div class="col-4">
                                    <div class="form-inline ">
                                        <label for="nuevocel1" class="col-6 ">Teléfono 1:</label>
                                        <input class="form-control col-5" type="text" id="nuevocel1" name="nuevocel1" >
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="form-inline ml-4">
                                        <label for="nuevocel2" class="col-4 ">Teléfono 2:</label>
                                        <input class="form-control col-5" type="text" id="nuevocel2" name="nuevocel2" >
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="form-inline ">
                                        <label for="nuevocel3" class="col-4 ">Teléfono 3:</label>
                                        <input class="form-control col-5" type="text" id="nuevocel3" name="nuevocel3" >
                                    </div>
                                </div>

                                <br>
                                <br>
                                <br>
                                <div class="col-1"></div>
                                <div class="col-5">
                                    <div class="form-inline">
                                        <label for="nuevocargo" class="col-4 col-form-label">Cargo:</label>

                                        <select class="form-control col-6" name="nuevocargo" id="nuevocargo" required>

                                            <option value="">Seleccionar</option>
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
                                        <label for="nuevarea" class="col-4 col-form-label">Cargo:</label>

                                        <select class="form-control col-6" name="nuevarea" id="nuevarea" required>

                                            <option value="">Seleccionar</option>
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
                                </form>
                            </div>

                        <div class="tab-pane" id="ZRAM" role="tabpanel">
                            <form method="post" action="directorio.php" id="form2">
                            <span class="spacer15"></span>
                            <div id="" class="row" >
                                <div class="col-8">
                                    <div class="form-inline ">
                                        <label for="nombrex" class="col-3 col-form-label">Nombre Completo:</label>
                                        <input class="form-control col-9" type="text" id="nombrex" name="nombrex" required>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="form-inline ">
                                        <label for="telef1" class="col-5 ">Teléfono 1:</label>
                                        <input class="form-control col-5" type="text" id="telef1" name="telef1" >
                                    </div>
                                </div>
                                <br>
                                <br>
                                <br>
                                <div class="col-8">
                                    <div class="form-inline ">
                                        <label for="oficio" class="col-3 col-form-label">Cargo u Oficio:</label>
                                        <input class="form-control col-6" type="text" id="oficio" name="oficio" required>
                                    </div>
                                </div><div class="col-4">
                                    <div class="form-inline ">
                                        <label for="telefono1" class="col-5 ">Teléfono 2:</label>
                                        <input class="form-control col-5" type="text" id="telefono1" name="telefono1" >
                                    </div>
                                </div>
                                <br>
                                <br>
                                <br>
                                <div class="col-8">
                                    <div class="form-inline ">
                                        <label for="lugar" class="col-3 col-form-label">Centro de Trabajo:</label>
                                        <input class="form-control col-5" type="text" id="lugar" name="lugar" >
                                    </div>
                                </div><div class="col-4">
                                    <div class="form-inline ">
                                        <label for="telefono1" class="col-5 ">Teléfono 3:</label>
                                        <input class="form-control col-5" type="text" id="telefono1" name="telefono1" >
                                    </div>
                                </div>
                                </div>
                            </form>
                                </div>


                        </div>
                        </div>
                        <br>

                        <br>

                </div>
            </div>
        </div>
    </section>







<?php


include ('footer.php') ?>
