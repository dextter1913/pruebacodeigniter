$(document).ready(function () {
    console.log('Hola desde jquery');
    PruebaJquery();
    //TablaClientes();
    MostrandoJson();
});

var MostrandoJson = function () {
    $.ajax({
        type: "POST",
        url: "index.php/Prueba/datatable",
        type: "json",
        success: function (Respuesta) {
            console.log(Respuesta);
        }
    });
}

//Funcion para mostrar Datatable por Ajax
var TablaClientes = function () {
    var table = $('#TablaClientes').DataTable({
        "ajax": {
            "method": "POST",
            "url": "index.php/Prueba/datatable"
        },
        "columns": [
            { "data": "IdCliente" },
            { "data": "Nombre" },
            { "data": "Apellido" },
            { "data": "Email" },
            { "data": "Identificacion" }
        ]
    });
}


let PruebaJquery = function(){
    $('#Ingresar').click(function (e) { 
        e.preventDefault();

        let form = $('#frmInsertarDatos').serialize();
        $.ajax({
            type: "POST",
            url: "index.php/Prueba/insertardatos",
            data: form,
            success: function (Respuesta) {
                console.log(Respuesta);
            },
            error: function (xhr, status, error){
                console.log(xhr);
                console.log(status);
                console.log(error);
            }
            
        });
        Search:

        $('#email').val('');
        $('#identificacion').val('');
    });
}

