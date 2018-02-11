<?php
require 'session.php';

include('funciones.php');
include ('header.php');
include('navbar.php')

?>

    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <h3 class="pb-2 mb-4 mt-4 offset-1" style="border-bottom: 1px solid lightgray">MASTER-RACIEMSA</h3>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
        <div class="row">
            <section class="col-3 ml-4">
                <div class="card border-primary mb-4">
                    <div class="card-header bg-primary text-white">
                        <div class="row">
                            <div class="col-3 ">
                                <i class="fa fa-comments fa-3x"></i>
                            </div>
                            <div class="col-8 ml-4">
                                <span>Busqueda por <br>Código Tracto</span>
                            </div>
                        </div>
                    </div>
                    <form method="POST" class="text-primary">
                        <div class="card-footer">
                            <div class="row">
                                <input type="input" name="doc" class="col-5 form-control offset-3"  id="doc"  >
                                <input type="submit" value="Buscar" class="btn btn-primary btn-sm offset-1" name="codigo_tracto" >
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </form>
                </div>

                <div class="card border-success mb-4">
                    <div class="card-header bg-success text-white">
                        <div class="row">
                            <div class="col-xs-3">
                                <i class="fa fa-tasks fa-3x "></i>
                            </div>
                            <div class="col-xs-9 ml-5">
                                <span>Búsqueda por <br>Código Acople</span>
                            </div>
                        </div>
                    </div>
                    <form method="POST" class="text-success">
                        <div class="card-footer">
                            <div class="row">
                                <input type="input" name="doc2" class="col-5 form-control offset-3"  id="doc2"  >
                                <button id="rotulo" class="btn btn-success btn-sm offset-1" name="codigo_acople" >Buscar</button>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </form>
                </div>

                <div class="card border-info mb-4">
                    <div class="card-header bg-info text-white">
                        <div class="row">
                            <div class="col-xs-3">
                                <i class="fa fa-shopping-cart fa-3x "></i>
                            </div>
                            <div class="col-xs-9 ml-5">
                                <span>Búsqueda por <br>Código Sap</span>
                            </div>
                        </div>
                    </div>
                    <form method="POST" class="text-info">
                        <div class="card-footer">
                            <div class="row">
                            <input type="input" name="doc4" class="col-5 form-control offset-3"  id="doc4"  >
                            <button id="" class="btn btn-info btn-sm offset-1" name="codigo_sap" >Buscar</button>
                            <div class="clearfix"></div>
                            </div>
                        </div>
                    </form>
                </div>

                <div class="card border-secondary mb-4">
                    <div class="card-header bg-secondary text-white">
                        <div class="row">
                            <div class="col-xs-3">
                                <i class="fa fa-support fa-3x"></i>
                            </div>
                            <div class="col-xs-9 ml-5">
                                <div class="huge"></div>
                                <div>Support Tickets!</div>
                            </div>
                        </div>
                    </div>
                    <a href="#" class="text-secondary">
                        <div class="card-footer">
                            <span class="pull-left">View Details</span>
                            <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                            <div class="clearfix"></div>
                        </div>
                    </a>
                </div>
        </section>

            <section class="col-8">
                <form method="POST" >
                    <div class="form-group row text-center offset-2" >
                        <label for="doc3" class="col-form-label mr-3"><b>Colaborador:</b></label>
                        <input type="text" name="doc3" class="form-control col-6" id="nombres" placeholder="Ingrese Nombre o Apeliido..." onkeyup="getTelefono(this.value)" >
                        <a style="color:white" class="btn-sm btn btn-primary ml-2" onclick="getTelefono(nombres.value)">Teléfonos</a>
                        <input type="submit" value="Ver Dts" class="btn-sm btn btn-danger ml-3" name="codigo_operario">
                    </div>
                </form>

                <section class="" id="telefonoSap">
                </section>


                <?php

                if(isset($_POST['codigo_tracto']))
                {
                    if($_POST['doc'] != ""){
                    $valor = $_POST['doc'];
                include_once ('nuevoDT.php');
                }}

                elseif(isset($_POST['codigo_acople']))
                {
                    if($_POST['doc2'] != ""){
                    $valor2 = $_POST['doc2'];
                include_once ('nuevoAc.php');
                }}

                elseif(isset($_POST['codigo_operario']))
                {
                if($_POST['doc3'] != ""){
                    $valor3 = $_POST['doc3'];

                include_once ('nuevoOpe.php');
                }}


                ?>



            </section>
        </div>
    </div>

        <!-- /.row -->
        <!--
        <label class="custom-file">
            <input type="file" id="file" class="custom-file-input">
            <span class="custom-file-control"></span>
        </label>-->

<script>
$(document).ready(function(){



        });



</script>


<?php include ('footer.php') ?>

