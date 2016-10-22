

$(document).ready(function() {
    // Setup - add a text input to each footer cell
    $('.os-table tfoot th').each( function () {
        var title = $(this).text();
        $(this).html( '<input type="text" placeholder="Search '+title+'" />' );
    } );
 
    // DataTable
    var table = $('.os-table').DataTable();
 
    // Apply the search
    table.columns().every( function () {
        var that = this;
 
        $( 'input', this.footer() ).on( 'keyup change', function () {
            if ( that.search() !== this.value ) {
                that
                    .search( this.value )
                    .draw();
            }
        } );
    } );
} );


$(".os-table").DataTable({
  "order": [[0,"desc"]],
  "paging": true,
  "columnDefs": [
    { "searchable": false, "targets": 0 },
    { "searchable": true, "targets": 1 },
    { "searchable": true, "targets": 2 }


  ],
  "language": {
    "sEmptyTable": "Nenhuma solicitação encontrada",
    "sInfo": "Mostrando de _START_ até _END_ de _TOTAL_ solicitações",
    "sInfoEmpty": "Mostrando 0 até 0 de 0 solicitações",
    "sInfoFiltered": "(Filtrados de _MAX_ solicitações)",
    "sInfoPostFix": "",
    "sInfoThousands": ".",
    "sLengthMenu": "_MENU_ solicitações por página",
    "sLoadingRecords": "Carregando...",
    "sProcessing": "Processando...",
    "sZeroRecords": "Nenhum registro encontrado",
    "sSearch": "Nome do Solicitante ou Protocolo:",
    "oPaginate": {
        "sNext": "Próximo",
        "sPrevious": "Anterior",
        "sFirst": "Primeiro",
        "sLast": "Último"
    },
    "oAria": {
        "sSortAscending": ": Ordenar colunas de forma ascendente",
        "sSortDescending": ": Ordenar colunas de forma descendente"
    }
  }

});