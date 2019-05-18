function validaCampoMarca(objeto) {
    console.log("js");
    if(objeto.selectedIndex == 0){
        var span = document.querySelector('.txt-marca');
        span.innerText = "Selecione uma marca";
        console.log("dentro do if");
        return false;
    }
    document.querySelector('.txt-marca').innerText = "";
    return true;
}

function validaCampoModelo(objeto) {
    if(objeto.value.length < 2) {
        var span = document.querySelector('.txt-modelo');
        span.innerText = "Modelo incorreto";
        return false;
    }
    document.querySelector('.txt-modelo').innerText = "";
    return true;
}

function validaCampoAno(objeto) {
    if(isNaN(objeto.value)) {
        document.querySelector('.txt-ano').innerText = "Somente números";
        return false;
    }
    if(objeto.value < 1970 || objeto.value > 2014) {
        document.querySelector('.txt-ano').innerText = "De 1970 a 2014";
        return false;
    } 
    document.querySelector('.txt-ano').innerText = "";
    return true;
}

function validaOpcionais() {
    var opcionais = document.querySelectorAll('.checkbox');
    var checks = 0;
    opcionais.forEach(opcional => {
        if(opcional.checked) {
            checks += 1;
        }
    });
    if(checks == 0) {
        var span = document.querySelector('.txt-opcionais');
        span.innerText = "Selecione pelo menos um opcional";
        return false;
    }

    var outro = document.querySelector('#outro');
    if(outro.checked) {
        var inputOutro = document.querySelector('#outro-text');
        inputOutro.removeAttribute('disabled');
        inputOutro.focus();
    }

    document.querySelector('.txt-opcionais').innerText = "";
    return true;
}

function validaOutro(objeto) {
    if(objeto.value.length < 2) {
        document.querySelector('.txt-opcionais').innerText = "No minimo duas letras";
        return false;
    }
    document.querySelector('.txt-opcionais').innerText = "";
    return true;
}