
$(function () {

    $("#telFixo").mask("(99) 9999-9999");
    $("#telCelular").mask("(99) 99999-9999");
    
    $("#cpf_cnpj").mask("999.999.999-99");
    $("#cpf-cnpj-cliente").mask("999.999.999-99");
    $("#clienteOs").mask("999.999.999-99");
    $("input").blur(function () {
        $("#info").html("Unmasked value: " + $(this).mask());
    }).dblclick(function () {
        $(this).unmask();
    });
});

$(function () {
    $('#cpf_cnpj').blur(function () {
        // O CPF ou CNPJ
        var cpf_cnpj = $(this).val();
        // Testa a validação e formata se estiver OK
        if (formata_cpf_cnpj(cpf_cnpj)) {
            $(this).val(formata_cpf_cnpj(cpf_cnpj));
        } else {
            alert('CPF ou CNPJ inválido!');
            break;
        }
    });
    
    $('#cpf-cnpj-cliente').blur(function () {
        // O CPF ou CNPJ
        var cpf_cnpj = $(this).val();
        // Testa a validação e formata se estiver OK
        if (formata_cpf_cnpj(cpf_cnpj)) {
            $(this).val(formata_cpf_cnpj(cpf_cnpj));
        } else {
            alert('CPF ou CNPJ inválido!');
            break;
        }
    });
});

$(function () {
   
    $("#adicao").maskMoney(
            {symbol: 'R$',
                showSymbol: true,
                thousands: '',
                decimal: ',',
                symbolStay: true}
    );
   
    $("#valorOs").maskMoney(
            {symbol: 'R$',
                showSymbol: true,
                thousands: '',
                decimal: ',',
                symbolStay: true}
    );

    $(".graus").maskMoney(
            {symbol: 'R$', // Simbolo 
                thousands: '.',
                decimal: '.', // Separador do decimal
                precision: 2,
                allowZero: false, // Permite que o digito 0 seja o primeiro caractere 
                showSymbol: false // Exibe/Oculta o símbolo
            });
});
