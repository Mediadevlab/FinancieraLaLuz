$(document).ready(function() {
    var table = $('#example').DataTable( {
        responsive: true,
        lengthChange: false,
        scrollY: '90vh',
        scrollX: true,
        scrollCollapse: true,
        buttons: [ 'copy', 'excel', 'pdf', 'print', 'colvis'],
        
        language: {
            "lengthMenu": "Cantidad de registros a mostrar _MENU_ ",
            "zeroRecords": "No se encontro ningun registro",
            "info": "Mostrando registros del _START_ al _END_ de un total de _TOTAL_",
            "infoEmpty": "No hay registros para mostrar",
            "sSearch": "",
            "oPaginate": {
                "sFirst": "Primero",
                "sLast": "Último",
                "sNext": "Siguiente",
                "sPrevious": "Anterior"
            },
            "sProcessing": "Procesando...",
        },
        
    } );
 
    table.buttons().container()
        .appendTo( '#example_wrapper .col-md-6:eq(0)' );
} );