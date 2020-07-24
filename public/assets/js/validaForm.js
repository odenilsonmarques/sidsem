
$(document).ready(function () {
    //o código abaixo, solicita que o usuário insira somente letras
    jQuery.validator.addMethod("isString", function (value, element) {
        var regExp = /[0-9]/;
        if (regExp.test(value))
            return false;
        return true;
    },
            "Por Favor! Insira Somente Letras");

    //Na linha abaixo, quando o form for submetido ele faz o validate 
    $('#frmContato').validate({
        //na linha abaixo sao criada as regras de validacao
        rules: {
            nome: {
                required: true,
                minlength: 10,
                isString: true
            },
            email: {
                required: true,
                email: true
            },
            mensagem: {
                required: true,
                minlength: 20
            }
        },
        //na  linha abaixo sao criada as mensagem que serao vista pelo usuarios
        messages: {
            nome: {
                required: "Campo Obrigatório*",
                minlength: "Nome Inválido! Por Favor, Informe Mais Detalhes"
            },
            email: {
                required: "Campo Obrigatório*",
                email: "Email Inválido! Por Favor, Insira Um E-mail Válido"
            },
            mensagem: {
                required: "Campo Obrigatório*",
                minlength: "Mensagem Inválida! Por Favor, Informe Mais Detalhes"
            }
        }
    });
});

