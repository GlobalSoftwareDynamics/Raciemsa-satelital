<?php

$estilo= "style=\"display:none\"";
if(isset($_POST['telefono'])){
    $estilo= "style=\"display:block\"";
    if($_POST['doc3'] != ""){
        $estilo = "style=\"display:block\"";
    }else{
        $estilo= "style=\"display:none\"";

    }}
?>

<section class="container" <?php echo $estilo ?> >
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
                    </thead>
                </table>
            </div>
        </div>
    </div>
</section>