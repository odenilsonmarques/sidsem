function  msgRetorno() {
    if (document.frmContato.nome.value !== '' && document.frmContato.email.value !== '' && document.frmContato.mensagem.value !== '' ) {
        alert("MENSAGEM ENVIADA COM SUCESSO!");
        document.frmContato.mensagem.focus();
        document.frmContato.mensagem.value = '';
        document.frmContato.nome.focus();
        document.frmContato.nome.value = '';
        document.frmContato.email.focus();
        document.frmContato.email.value = '';
        return false;//garante que o campo nao pode ser nulo
    }
}