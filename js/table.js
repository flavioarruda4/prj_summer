

$(document).ready(function () {
    

    $(".os-table").DataTable({
        "order": [[0, "desc"]],
        "paging": true,
        "columnDefs": [
            {"searchable": true, "targets": 0},
            {"searchable": true, "targets": 1},
            {"searchable": true, "targets": 2}


        ],
        "language": {
            "sEmptyTable": "Nenhuma OS encontrada",
            "sInfo": "Mostrando de _START_ até _END_ de _TOTAL_ OS",
            "sInfoEmpty": "Mostrando 0 até 0 de 0 OS",
            "sInfoFiltered": "(Filtrados de _MAX_ OS)",
            "sInfoPostFix": "",
            "sInfoThousands": ".",
            "sLengthMenu": "_MENU_ OS por página",
            "sLoadingRecords": "Carregando...",
            "sProcessing": "Processando...",
            "sZeroRecords": "Nenhum registro encontrado",
            "sSearch": "Nome cliente ou ID Os:",
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
    
    
    $(".os-user-table").DataTable({
        "order": [[0, "desc"]],
        "paging": true,
        "columnDefs": [
            {"searchable": true, "targets": 0},
            {"searchable": true, "targets": 1},
            {"searchable": true, "targets": 2}


        ],
        "language": {
            "sEmptyTable": "Nenhum usuário encontrado",
            "sInfo": "Mostrando de _START_ até _END_ de _TOTAL_ usários",
            "sInfoEmpty": "Mostrando 0 até 0 de 0 Usuários",
            "sInfoFiltered": "(Filtrados de _MAX_ OS)",
            "sInfoPostFix": "",
            "sInfoThousands": ".",
            "sLengthMenu": "_MENU_ Usuários por página",
            "sLoadingRecords": "Carregando...",
            "sProcessing": "Processando...",
            "sZeroRecords": "Nenhum registro encontrado",
            "sSearch": "Nome Usuário:",
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
});


