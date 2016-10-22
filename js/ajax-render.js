jQuery(document).ready(function () {
//Ajax login
    jQuery(document).ready(function () {
        jQuery('#form-login').submit(function () {
            var dados = jQuery(this).serialize();
            jQuery.ajax({
                type: "POST",
                url: "controllers/logar.php",
                data: dados,
                success: function (result) {
                    alert(result);
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
});

