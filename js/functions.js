$(document).ready(function() {


$(function() {

    var $contextMenu = $("#contextMenu");

    $("body").on("contextmenu", "table td.edicion ", function(e) {
        $contextMenu.css({
            display: "block",
            left: e.pageX,
            top: e.pageY
        });

        $('body').click(function () {
            $contextMenu.hide();
        });

        /*$contextMenu.mouseleave(function () {
            $contextMenu.hide();
        });*/

        var $row = $(e.target).text();
        document.fsap.idSap.value = $row;

        return false;

    });

    $contextMenu.on("click", "a", function() {
        $contextMenu.hide();
    });

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

});
