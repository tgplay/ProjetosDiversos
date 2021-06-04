function trocar(){
    if(document.querySelector('button').classList.contains('preto')){
        document.querySelector('button').classList.remove('preto');
        document.querySelector('button').classList.add('verde');
    } else {
        document.querySelector('button').classList.remove('verde');
        document.querySelector('button').classList.add('preto');
    }
}


/*function verde(){
    document.querySelector('#exemplo').classList.remove('vermelho');
    document.querySelector('#exemplo').classList.remove('azul');
    document.querySelector('#exemplo').classList.add('verde');
}
function vermelho(){
    document.querySelector('#exemplo').classList.remove('azul');
    document.querySelector('#exemplo').classList.remove('verde');
    document.querySelector('#exemplo').classList.add('vermelho');
}
function azul(){
    document.querySelector('#exemplo').classList.remove('vermeçho');
    document.querySelector('#exemplo').classList.remove('v');
    document.querySelector('#exemplo').classList.add('azul');
}*/