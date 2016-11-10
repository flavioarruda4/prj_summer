$(document).ready(function () {
//Ajax login
    $(document).ready(function () {
        $('#form-login').submit(function () {
            var dados = jQuery(this).serialize();
            $.ajax({
                type: "POST",
                url: "controllers/logar.php",
                data: dados,
                success: function (result) {
                    if (result == 1) {

                        location.href = 'views/home.php';
                    } else {
                        $("#msgerro").fadeIn(1500, function () {
                            window.setTimeout(function () {
                                $('#msgerro').fadeOut();
                            }, 10000);
                        });
                    }
                }
            });
            return false;
        });
    });

//Ajax Cadastro de Usuario

    $('#cadastro-usuario').submit(function () {
        $("#load").html("<img src='/prj_summer/images/load.gif'>");
        $("#load").fadeIn(100, function () {
            window.setTimeout(function () {
                $('#cadastro-usuario').find('input:text').val('');
                $('#load').fadeOut();
            }, 1400);
        });
        var dados = jQuery(this).serialize();
        if ($('#senha').val() === $('#senha2').val()) {
            $.ajax({
                type: "POST",
                url: "/prj_summer/controllers/usuarioDAO.php",
                data: dados,
                success: function (data) {
                    $("#msgsucessouser").fadeIn(1500, function () {
                        $("#msgsucessouser").focus();
                        window.setTimeout(function () {
                            $('#msgsucessouser').fadeOut();

                        }, 2500);
                    });
                }
            });
        } else {

            var field = document.getElementById('senha2');
            field.value = field.defaultValue;
            $('#senha2').focus();
            $('#msgerrosenha').fadeIn();

        }
        return false;

    });

//Ajax renderiza a pagina que edita usuario
    jQuery(document).ready(function () {
        $(document).on('click', '.edit-user', function () {
            var idUsuarios = $(this).closest('td').find('.idUsuarios').text();
            $('#page-edita').fadeOut(0, function () {
                $('#page-edita').load('/prj_summer/views/update-user.php?id=' + idUsuarios, function () {
                    $('#page-edita').fadeIn(0);
                    $('#update-user').focus();
                });
            });
        });
    });

// ajax update do usuario
    jQuery(document).ready(function () {
        $(document).on('submit', '#update-user', function () {
            var update = jQuery(this).serialize();

            if ($('#senha-edit').val() === $('#senha-edit-2').val()) {
                jQuery.ajax({
                    type: "POST",
                    url: "/prj_summer/controllers/usuario-update.php",
                    data: update,
                    success: function (data) {
                        $('#update-user').hide();
                        $("#msgsucesso-user-update").fadeIn(150, function () {
                            window.setTimeout(function () {
                                $('#msgsucesso-user-update').fadeOut();
                            }, 3999);
                        });

                    }
                });
            } else {
                var field = document.getElementById('senha-edit-2');
                field.value = field.defaultValue;
                $('#senha-edit-2').focus();
                $('#msgerro-update-senha').fadeIn();

            }
            return false;
        });
    });

//Ajax do cadastro de cliente
    $('#cadastro-cliente').submit(function () {
        $("#load").html("<img src='/prj_summer/images/load.gif'>");
        $("#load").fadeIn(100, function () {
            window.setTimeout(function () {
                $('#cadastro-cliente').find('input:text').val('');
                $('#load').fadeOut();
            }, 1400);
        });
        var dados = jQuery(this).serialize();

        $.ajax({
            type: "POST",
            url: "/prj_summer/controllers/clienteDAO.php",
            data: dados,
            success: function (data) {
                $("#msgsucessoclient").fadeIn(1500, function () {
                    $("#msgsucessoclient").focus();
                    window.setTimeout(function () {
                        $('#msgsucessoclient').fadeOut();
                    }, 2500);
                });
            }
        });

        return false;

    });
//Ajax do cadastro de OS
    $('#cadastro-os').submit(function () {
        $('#cadastro-os').find('input:text').val('');
        $('#cadastro-os').find('input:radio').val('');
        var dados = jQuery(this).serialize();
        $.ajax({
            type: "POST",
            url: "/prj_summer/controllers/osDAO.php",
            data: dados,
            success: function (data) {
                
                $("#load-os").html("<img src='/prj_summer/images/load.gif'>");
                $("#load-os").focus();
                $(".bs-os-modal-lg").animate({ scrollTop: 0 }, "slow");
                $("#load-os").fadeIn(100, function () {
                    window.setTimeout(function () {
                        $('#close-os-modal').click();
                        $('#load-os').fadeOut();
                    }, 1400);
                });
                $("#msgsucesso-os").fadeIn(2000, function () {
                    $("#msgsucesso-os").focus();
                    window.setTimeout(function () {
                        $('#msgsucesso-os').fadeOut();
                    }, 2500);
                });
            }
        });

        return false;

    });


//Datepicker js
    $('.dateTxt').datepicker({
        clearBtn: true,
        language: "pt-BR",
        todayHighlight: true,
        autoclose: true
    });
});

