<?php include ('header.php') ?>

    <div class="container">
        <div class="row justify-content-center">
            <h3><br>INGRESE NUEVO REGISTRO</h3>
        </div>
        <br>
        <form class="form-horizontal" method="POST" action="guardar.php" autocomplete="off">
            <div class="form-group row">
                <label for="numero DT" class="col-sm-2 control-label">Numero de DT</label>
                <div class="col-sm-10 col-md-4">
                    <input type="number" class="form-control" id="dt" name="dt" placeholder="Numero de DT..." required>
                </div>
            </div>

            <div class="form-group row">
                <label for="Fecha inicio" class="col-sm-2 control-label">Fecha inicio</label>
                <div class="col-sm-10 col-md-4">
                    <input type="date" class="form-control" id="fecha" name="fecha" placeholder="YYYY/MM/DD" required>
                </div>
            </div>

            <div class="form-group row">
                <label for="Codigo Tracto" class="col-sm-2 control-label">Código externo Tracto</label>
                <div class="col-sm-10 col-md-4">
                    <input type="text" class="form-control" id="tracto" name="tracto" placeholder="20-R-999">
                </div>
            </div><div class="form-group row">
                <label for="Codigo Acople" class="col-sm-2 control-label">Codigo externo Acople</label>
                <div class="col-sm-10 col-md-4">
                    <input type="text" class="form-control" id="acople" name="acople" placeholder="20-P-999">
                </div>
            </div><div class="form-group row">
                <label for="Codigo Sap" class="col-sm-2 control-label">Codigo Sap</label>
                <div class="col-sm-10 col-md-4">
                    <input type="text" class="form-control" id="sap" name="sap" placeholder="Sap Conductor">
                </div>
            </div>


            <div class="form-group row">
                <label for="estado_civil" class="col-sm-2 control-label">Tipo de DT</label>
                <div class="col-sm-10 col-md-3">
                    <select class="form-control" id="clase" name="clase">
                        <option value="ZRAC">ZRAC</option>
                        <option value="ZRAM">ZRAM</option>
                    </select>
                </div>
            </div>

            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <a href="index.php" class="btn btn-default">Regresar</a>
                    <button type="submit" class="btn btn-primary">Guardar</button>
                </div>
            </div>
        </form>
    </div>


<?php include ('footer.php') ?>