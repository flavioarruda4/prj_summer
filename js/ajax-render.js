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



});

