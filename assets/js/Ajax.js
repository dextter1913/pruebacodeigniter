$(document).ready(function () {
    console.log('Hola desde jquery');
    PruebaJquery();
    TablaClientes();
});

//Funcion para mostrar Datatable por Ajax
var TablaClientes = function () {
    var table = $('#TablaClientes').DataTable({
        "ajax": {
            "method": "POST",
            "url": "index.php/Welcome/Datatable"
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
            url: "index.php/Welcome/PruebaAjax",
            data: form,
            success: function (Respuesta) {
                
            },
            error: function (xhr, status, error){
                console.log(xhr);
                console.log(status);
                console.log(error);
            }
            
        });
    });
}

