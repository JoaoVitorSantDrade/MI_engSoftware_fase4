/*Container dos dados do paciente*/
var container = document.getElementById("container-teste");
var button = document.getElementById("action-btn");

/*Container dos agendamentos do paciente*/
var container2 = document.getElementById("container-teste2");
var button2 = document.getElementById("action-btn2");

/*Container das medicações ministradas*/
var container3 = document.getElementById("container-teste3");
var button3 = document.getElementById("action-btn3");

/*Container do nome do aplicador do medicamento e seu leito*/
var container4 = document.getElementById("container-teste4");
var button4 = document.getElementById("action-btn4");

/*Container onde fica localizadas as ocorrências*/
var container5 = document.getElementById("container-teste5");
var button5 = document.getElementById("action-btn5");

/**/
var container6 = document.getElementById("container-teste6");
var button6 = document.getElementById("action-btn6");

var esconde;

button.addEventListener("click", function() {

     esconde = document.getElementById("container-teste");

     if(esconde.classList.contains('hide')){
         esconde.classList.remove('hide');
     } else {
         esconde.classList.add('hide');
     }
});

button2.addEventListener("click", function() {

     esconde = document.getElementById("container-teste2");

    if(esconde.classList.contains('hide')){
        esconde.classList.remove('hide');
    } else {
        esconde.classList.add('hide');
    }
});

button3.addEventListener("click", function() {

     esconde = document.getElementById("container-teste3");

    if(esconde.classList.contains('hide')){
        esconde.classList.remove('hide');
    } else {
        esconde.classList.add('hide');
    }
});

button4.addEventListener("click", function() {

    esconde = document.getElementById("container-teste4");

    if(esconde.classList.contains('hide')){
        esconde.classList.remove('hide');
    } else {
        esconde.classList.add('hide');
    }
});

button5.addEventListener("click", function() {

    esconde = document.getElementById("container-teste5");

    if(esconde.classList.contains('hide')){
        esconde.classList.remove('hide');
    } else {
        esconde.classList.add('hide');
    }
});

button6.addEventListener("click", function() {

    esconde = document.getElementById("container-teste6");

    if(esconde.classList.contains('hide')){
        esconde.classList.remove('hide');
    } else {
        esconde.classList.add('hide');
    }
});


var Campo_Status = document.getElementById("fstatus");
var Select_Status_Saida = document.getElementById("status_saida");

document.addEventListener('DOMContentLoaded',function(){
    if(Campo_Status.value === "internado"){
        var Status = CreateOption();
        Select_Status_Saida.appendChild(Status[0]);
        Select_Status_Saida.appendChild(Status[1]);
    }
    else{
        button6.classList.add('hide');
        container6.classList.add('hide');
    }
})


function CreateOption(){
    var Alta = document.createElement('option');
    var AltaText = document.createTextNode('Alta');
    Alta.appendChild(AltaText);
    Alta.setAttribute("value","alta");

    var Obito = document.createElement('option');
    var ObitoText = document.createTextNode('Óbito');
    Obito.appendChild(ObitoText);
    Obito.setAttribute("value","obito");
    a = [Alta,Obito];
    return a;
}

edit = document.getElementById('edit');
parent_div = edit.parentNode;
edit.addEventListener('click',function(){
    var save = createButton();
    editData();
    edit.remove();
})

function createButton(){
    let button = document.createElement('button');
    var buttonText = document.createTextNode(' Salvar ');
    button.appendChild(buttonText);
    button.classList.add('btn-blue');
    button.setAttribute('type','submit');

    let buttonCnl = document.createElement('button');
    var buttonCnlText = document.createTextNode(' Cancelar ');
    buttonCnl.appendChild(buttonCnlText);
    buttonCnl.classList.add('btn-blue');
    buttonCnl.setAttribute('type','button');

    buttonCnl.addEventListener('click',function(){
        document.location.reload();
    })

    parent_div.appendChild(button);
    parent_div.appendChild(buttonCnl);
    return button;
}
function createSexButton(){
    // Fazer
}

fnome = document.getElementById('fnome');
fcpf = document.getElementById('fcpf');
fleito = document.getElementById('fleito');
fnascimento = document.getElementById('fnascimento');

function editData(){
    fnascimento.removeAttribute('disabled');
    fnome.removeAttribute('disabled');
    fcpf.removeAttribute('disabled');
    fleito.removeAttribute('disabled');
}