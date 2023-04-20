$(document).ready(function () {
    //validacion busqueda cliente
    var callback = function () {
        var dni = $("#dni").val();

        if (dni == "") {
            alert("Ingresar ID");
            return false;
        } else {
            $.post(
                base_url + "PrestamoController/ajax_buscarCliente/",
                { dni: dni },
                function (data) {
                    if (data == "[]") {
                        $("#dni").val("");
                        alert("No existe el cliente");
                        $("#dni").val("");
                        $("nombre").val("");
                        $("cliente").val("");
                    } else {
                        $("#dni").val("");
                    }
                }
            );
        }
    };

    $("#dni").keypress(function (event) {
        if (event.which == 13) callback();
    });

    $("#btn_buscar").click(callback);

    //validacion de monto prestado
    $("#calcular").on('click', function() {
        var contador = 0

        if ($("#cr_monto").val()=="") {
            contador=1
            alert("Ingrese Monto")
            $("cr_monto").focus()
            return false;
        }

        if ($("#in_monto").val()=="") {
            contador=1
            alert("Ingrese Interés")
            $("in_monto").focus()
            return false;
        }

        if ($("#cuota").val()=="") {
            contador=1
            alert("Ingrese Cuotas")
            $("cuota").focus()
            return false;
        }

        if (contador==0) {
            $('#registrar_prestamo').attr('disabled', false);
        }

        let monto = parseFloat($('#cr_monto').val());
        let interes = $('#in_monto').val();
        let num_cuotas = $('#cuota').val();
        let interes_final = monto * (interes / 100);
        let monto_total = interes_final + monto;
        let cuota = monto_total / num_cuotas; 

        $('#valor_cuota').val(cuota.toFixed(2));
        $('#valor_interes').val(interes_final.toFixed(2));
        $('#monto_total').val(monto_total.toFixed(2));
    });
})
