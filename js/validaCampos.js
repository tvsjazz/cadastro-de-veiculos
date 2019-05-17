function validaCampo(objeto) {
    console.log("js");
    if(objeto.selectedIndex == 0){
        var span = document.querySelector('.txt-validacao');
        span.innerText = "Selecione uma marca";
        console.log("dentro do if");
        return false;
    }
    return true;
}