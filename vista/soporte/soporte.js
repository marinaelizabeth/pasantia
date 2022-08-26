var tablaClientes = null; //para aumentar el scope
$(document).ready(function () {
    tablaSoporte = $('#soporte').DataTable({
       
        // "aaSorting": [],
        order: [[0, 'desc']],

        "dom": 'Bfrtip',
       
        "language": {
            "lengthMenu": "Mostar _MENU_ registros",
            "zeroRecords": "No se encontraron coincidencias",
            "info": "Mostrando _PAGE_ de _PAGES_ páginas",
            "infoEmpty": "No hay registros",
            "infoFiltered": "(Filtrado de _MAX_ registros en total)",
            "search": "Buscar:",
            "LoadingRecords": "Cargando ...",
            "Processing": "Procesando...",
            "SearchPlaceholder": "Comience a teclear...",
           
            "paginate": {
                "previous": "Anterior",
                "next": "Siguiente",
                "first": "Primero",
                'last': 'Último',
            }
        },
    });


    // editar("#clientes tbody", tablaClientes);
});


