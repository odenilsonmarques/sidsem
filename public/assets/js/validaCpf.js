
function validaFormato(element) {
    var strDocument = (element.value).replace(/\D/g,'');
    var sizeStrDocument = (strDocument).length;
    var RegExp = /(^[\d]{3}[\d]{3}[\d]{3}[\d]{2}$)|(^[\d]{2}[\d]{3}[\d]{3}[\d]{4}[\d]{2}$)/;
    var divResultado = document.getElementById("divResultado");

    if (RegExp.test(strDocument) === true) {
        if (sizeStrDocument === 11 ){
            if (!validaCPF(strDocument)){               
                divResultado.innerText = "CPF Inválido!";
                divResultado = document.getElementById('cpf');
                element.select();             
                return false; 
            }
            else{
                divResultado.innerText = "CPF Válido!";
                element.value=mascaraCPF(strDocument);
                return true;
            }
        }   
    } else {
        strDocument === "" ? divResultado.innerText = "" : divResultado.innerText = 'Erro, Por Favor Informe um CPF Válido!';
        return false;
    }
}
// Funcao que valida o CPF
function validaCPF(strDocument) {
    var soma;
    var resto;
    soma = 0;

    // Elimina CPF's invalidos conhecidos
    if (strDocument === "00000000000" ||
        strDocument === "11111111111" ||
        strDocument === "22222222222" ||
        strDocument === "33333333333" ||
        strDocument === "44444444444" ||
        strDocument === "55555555555" ||
        strDocument === "66666666666" ||
        strDocument === "77777777777" ||
        strDocument === "88888888888" ||
        strDocument === "99999999999")
    return false;

    for (i = 1; i <= 9; i++) soma = soma + parseInt(strDocument.substring(i - 1, i)) * (11 - i);
    resto = (soma * 10) % 11;

    if ((resto === 10) || (resto === 11)) resto = 0;
    if (resto !== parseInt(strDocument.substring(9, 10))) return false;

    soma = 0;
    for (i = 1; i <= 10; i++) soma = soma + parseInt(strDocument.substring(i - 1, i)) * (12 - i);
    resto = (soma * 10) % 11;

    if ((resto === 10) || (resto === 11)) resto = 0;
    if (resto !== parseInt(strDocument.substring(10, 11))) return false;
    return true;
}
// Funcaoo que bloqueia teclas nao numericas
function apenasNumeros(e)
{
    if (document.all){var evt=event.keyCode;}
    else{var evt = e.charCode;}
    if (evt <20 || (evt >47 && evt<58)){return true;}
    return false;
}

