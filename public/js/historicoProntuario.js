/**
 * Div em que se encontra um histórico
 */
var record = document.getElementById('record');

/**
 * Botão de busca de usuário
 */
var buscaBtn = document.getElementById('busca_user');

buscaBtn.addEventListener('click',function(){
    console.log("funcinou");
    if(record.classList.contains("hide")){
        record.classList.remove("hide");
        console.log("funcinou corretamente");
    }
})