var urlflag;

var urlSelf;



$(document).on("click", "#btn_save", function() {
    //var id_cust = $("#txtid").val();
    /* if (nombre == '' || nombre == null) {
        swal("Warning", "Please fill customer name", "warning");
        $("#txtname").focus();
        return;
    } */
    var msg = " Todos los campos son obligatorios. ";
    var respuestas = {};
    var obj = {
        producto: $("#idproducto").val(),
        stocki: $("#stocki").val(),
        stockf: $("#stockf").val(),
        stock: $("#stock").val(),
        precioi: $("#precioi").val(),
        preciov1: $("#preciov1").val(),
        preciov2: $("#preciov2").val(),
        preciovp: $("#preciovp").val(),
        codigob: $("#codigob").val(),
        codigoc: $("#codigoc").val(),
        '_csrf-backend': $("#token").val(),
    };

    if (validarForm(obj)) {
        showMessages("Error", msg, "warning");
    } else {

        hideMessages();

        /*Metodo Post de datos para grabar*/

        var obj = {

            producto: $("#idproducto").val(),

            presentacion: $("#presentacion").val(),
            calidad: $("#calidad").val(),
            color: $("#color").val(),
            sucursal: $("#sucursal").val(),
            clasificacion: $("#clasificacion").val(),
            stocki: $("#stocki").val(),

            stockf: $("#stockf").val(),

            stock: $("#stock").val(),

            precioi: $("#precioi").val(),

            preciov1: $("#preciov1").val(),

            preciov2: $("#preciov2").val(),

            preciovp: $("#preciovp").val(),

            codigob: $("#codigob").val(),

            codigoc: $("#codigoc").val(),

            '_csrf-backend': $("#token").val(),



        };

        saveData(obj);

    }

});



function validarForm(datos) {

    var cont = 0;

    //console.log(datos); 



    $.each(datos, function(index, element) {

        //console.log(index+' :'+element.trim().length); 

        if ((element.trim() == "" || element.trim().length == 0) && (index !== "descripcion")) {

            if (cont == 0) { $("#" + index).focus(); }

            cont++;

        }



    });

    if (cont > 0) { return true; } else { return false; }

}



function saveData(datos) {

    swal({

            title: "Grabar Registro",

            text: "Esta seguro que la información ingresada es correcta?",

            type: "info",

            showCancelButton: true,

            confirmButtonColor: "#32bc38",

            confirmButtonText: "Grabar",

            closeOnConfirm: true

        },

        function() {

            loading(1);



            $.ajax(

                {

                    url: "nuevo",

                    type: "POST",

                    data: datos,

                    success: function(data, textStatus, jqXHR) {

                        var data = jQuery.parseJSON(data);

                        loading(0);

                        if (data.success) {

                            loading(1);

                            $.notify('Se ha agregado el registro');

                            if (data.id)

                            {

                                window.location.href = "nuevo";

                            }

                        } else {

                            loading(0);

                            $.notify(data.Mensaje);

                            console.log("error");

                            //swal("Error", "Can't delete customer data, error : " + data.error, "error");

                        }

                    },

                    error: function(jqXHR, textStatus, errorThrown) {

                        $.notify("Error, no se han podido guardar los datos.");

                    }

                });

        });

    return true;

}



$(document).on("click", "#btn_update", function() {



    var msg = " Todos los campos son obligatorios. ";

    var respuestas = {};



    var obj = {

        producto: $("#idproducto").val(),


        stocki: $("#stocki").val(),

        stockf: $("#stockf").val(),

        stock: $("#stock").val(),

        precioi: $("#precioi").val(),

        preciov1: $("#preciov1").val(),

        preciov2: $("#preciov2").val(),

        preciovp: $("#preciovp").val(),

        codigob: $("#codigob").val(),

        codigoc: $("#codigoc").val(),

        '_csrf-backend': $("#token").val(),

    };

    if (validarForm(obj)) {

        showMessages("Error", msg, "warning");

    } else {

        hideMessages();

        /*Metodo Post de datos para grabar*/

        var obj = {

            producto: $("#idproducto").val(),
            presentacion: $("#presentacion").val(),
            calidad: $("#calidad").val(),
            color: $("#color").val(),
            sucursal: $("#sucursal").val(),
            clasificacion: $("#clasificacion").val(),
            stocki: $("#stocki").val(),
            stockf: $("#stockf").val(),
            stock: $("#stock").val(),
            precioi: $("#precioi").val(),
            preciov1: $("#preciov1").val(),
            preciov2: $("#preciov2").val(),
            preciovp: $("#preciovp").val(),
            codigob: $("#codigob").val(),
            codigoc: $("#codigoc").val(),
            estado: $("#estado").val(),
            '_csrf-backend': $("#token").val(),



        };

        editReg(obj);

    }

});



function editReg(datos) {

    swal({

            title: "Grabar Registro",

            text: "Esta seguro que la información ingresada es correcta?",

            type: "info",

            showCancelButton: true,

            confirmButtonColor: "#32bc38",

            confirmButtonText: "Grabar",

            closeOnConfirm: true

        },

        function() {

            loading(1);

            var action = $('#action').val();

            $.ajax(

                {

                    url: action,

                    type: "POST",

                    data: datos,

                    success: function(data, textStatus, jqXHR) {

                        var data = jQuery.parseJSON(data);

                        loading(0);

                        if (data.success) {

                            loading(1);

                            $.notify('Se ha actualizado el stock');

                            if (data.id)

                            {

                                window.location.href = "view?id=" + data.id;

                            }

                        } else {

                            loading(0);

                            $.notify(data.Mensaje);

                            console.log("error");

                            //swal("Error", "Can't delete customer data, error : " + data.error, "error");

                        }

                    },

                    error: function(jqXHR, textStatus, errorThrown) {

                        $.notify("Error, no se han podido guardar los datos.");

                    }

                });

        });

    return true;

}



/*

 $.notifyDefaults({

 type: 'success',

 delay: 500

 });*/



function showMessages(head, message, tipo) {

    loading(0);

    hideMessages();

    $("#messages").show();

    var html = '<div class="alert alert-' + tipo + '"><strong>' + head + '!</strong> ' + message + '</div>';

    $("#messages").html(html);

}



function hideMessages() {

    loading(0);

    $("#messages").hide();

    $("#messages").html("");

}