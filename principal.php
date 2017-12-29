<?php
require 'conexion.php';

include ('header.php');
include('navbar.php')

?>

    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <h1 class="pb-2 mb-4 mt-5 offset-1" style="border-bottom: 1px solid lightgray">Dashboard</h1>
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
                                <i class="fa fa-tasks fa-3x ml"></i>
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
                                <button id="rotulo" class="btn btn-success btn-sm offset-1" name="codigo_acople" >Buscar </button>
                                <div class="clearfix"></div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </form>
                </div>


                <div class="card border-warning mb-4">
                    <div class="card-header bg-warning text-white">
                        <div class="row">
                            <div class="col-xs-3">
                                <i class="fa fa-shopping-cart fa-3x"></i>
                            </div>
                            <div class="col-xs-9 ml-5">
                                <span>Búsqueda por <br>Código Sap</span>
                            </div>
                        </div>
                    </div>
                    <a href="busqueda_sap.php" class="text-warning">
                        <div class="card-footer">
                            <span class="pull-left">Número de Sap</span>
                            <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                            <div class="clearfix"></div>
                        </div>
                    </a>
                </div>


                <div class="card border-danger mb-4">
                    <div class="card-header bg-danger text-white">
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
                    <a href="#" class="text-danger">
                        <div class="card-footer">
                            <span class="pull-left">View Details</span>
                            <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                            <div class="clearfix"></div>
                        </div>
                    </a>
                </div>
        </section>

            <section class="col-8">
                <form method="POST" action="" class="offset-2 ">

                    <div class="form-group row text-center " >
                        <label for="doc" class="col-form-label mr-3"><b>Colaborador:</b></label>
                        <input type="text" name="doc" class="form-control col-6" id="doc" autocomplete="off" placeholder="Ingrese Nombre o Apeliido...">
                        <input type="submit" value="Ver Teléfonos" class="btn-sm btn btn-primary ml-2" name="codigo_nombre">
                    </div>
                </form>
                <br>
                <br>

                <?php

                if(isset($_POST['codigo_tracto']))
                {
                $valor = $_POST['doc'];

                include_once ('nuevoDT.php');

                }


                elseif(isset($_POST['codigo_acople']))
                {
                $valor2 = $_POST['doc2'];

                include_once ('nuevoAc.php');
                }
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

