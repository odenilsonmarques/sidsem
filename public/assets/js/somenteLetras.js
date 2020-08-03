function letras(e) {
    var expressao;
    expressao = /[0-9]/;
    if (expressao.test(String.fromCharCode(e.keyCode))) {
        return false;
    } else {
        return true;
    }
}
