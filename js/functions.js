$(document).ready(function() {
    $('.js-example-basic-multiple').select2();
});

function getTelefono(val) {
    $.ajax({
        type: "POST",
        url: "getAjax.php",
        data:{'Colaborador':val},
        success: function(data){
            $("#telefonoSap").html(data);
        }
    });
}


function getTallas(producto,codificacion) {
    $.ajax({
        type: "POST",
        url: "getAjax.php",
        data:{'productoCV':producto, 'idcodificacionTallaCV':codificacion},
        success: function(data){
            $("#row").html(data);
        }
    });
}


function getModalCombinacionColores(producto, contrato, codificacionTalla) {
    $.ajax({
        type: "POST",
        url: "getAjax.php",
        data:{'productoCVModalColores':producto, 'idConfirmacionVenta': contrato, 'codificacionTalla': codificacionTalla},
        success: function(data){
            $("#modalColores").html(data);
        }
    });
}

function getUnidadMedida(val) {
    $.ajax({
        type: "POST",
        url: "getAjax.php",
        data:{'idMaterialUM':val},
        success: function(data){
            $("#unidadMedida").html(data);
        }
    });
}
