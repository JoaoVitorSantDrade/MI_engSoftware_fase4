var agendaBtn = document.getElementById("agenBack");
var alwaysCheck = document.getElementById("alwaysCheck");


agendaBtn.addEventListener("click",function(){

    var agendamento = document.getElementById("AgendamentoBackup");
    if(agendamento.style.display === "none"){
        agendamento.style.display = "";
    } else {
        agendamento.style.display = "none";
    }

})

alwaysCheck.addEventListener("click",function(){

    var dataDiv = document.getElementById("dataDiv")
    if(dataDiv.style.display ==="none"){
        dataDiv.style.display = "";
    } else {
        dataDiv.style.display = "none";
    }
})