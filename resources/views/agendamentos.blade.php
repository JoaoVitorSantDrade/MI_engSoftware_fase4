<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
    <link href="{{ ('css/style.css') }}" rel="stylesheet"> 
    <link href="{{ ('bootstrap/css/bootstrap.css') }}" rel="stylesheet">
    
    <title>Meus agendamentos</title>
    
  </head>
  <body>
    <header class="header-adm">
        <a href="/">Nome Funcionário</a>
        <nav>
            <ul class="header-menu">
                <li><a href="/">INICIO</a></li>
                <li><a href="/">FUNCIONÁRIOS</a></li>
                <li><a href="/">LOG DO SISTEMA</a></li>
                <li><a href="/">ALTERAÇÕES</a></li>
                <li><a href="/">BACKUP</a></li>
            </ul>
        </nav>
    </header>
    <section>
        <!--ENFERMEIRO E ESTAGIARIO -->
        <div class="container-1">
            <h1>VERIFICAÇÃO DE AGENDAMENTOS</h1>

            <!----------Agendamentos------------>
            
            <div class="box-agendamento">
                <div class="container-box">
                    <div class="row">
                        <div class="col-lg-2 text-center">
                            <div class="box-gray">
                                <a>xx:xx</a>
                            </div>
                        </div>
                        <div class="col-lg-2 text-center">
                            <div class="box-gray">
                                <a>xx/xx/xx</a>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="box-white">
                                <a>Nome do Medicamento Aqui</a>
                            </div>
                        </div>
                        <div class="col-lg-2">
                            <div class="box-white">
                                <a>Posologia</a>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-9">
                            <div class="box-blue">
                                <a>Nome do Paciente Aqui</a>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="box-blue">
                                <a>Leito: Código</a>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-9"> <!--isso aqui fica hidden--->
                            <div class="box-blue"> 
                                <a>Nome do Preparador Aqui</a> 
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div>
                                <input type="button" id="add_prep" value="Adicionar Preparador">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--Outro Agendamento-->
            <div class="box-agendamento">
                <div class="container-box">
                    <div class="row">
                        <div class="col-lg-2 text-center">
                            <div class="box-gray">
                                <a>xx:xx</a>
                            </div>
                        </div>
                        <div class="col-lg-2 text-center">
                            <div class="box-gray">
                                <a>xx/xx/xx</a>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="box-white">
                                <a>Nome do Medicamento Aqui</a>
                            </div>
                        </div>
                        <div class="col-lg-2">
                            <div class="box-white">
                                <a>Posologia</a>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-9">
                            <div class="box-blue">
                                <a>Nome do Paciente Aqui</a>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="box-blue">
                                <a>Leito: Código</a>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-9"> <!--isso aqui fica hidden--->
                            <div class="box-blue"> 
                                <a>Nome do Preparador Aqui</a> 
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div>
                                <input type="button" id="add_prep" value="Adicionar Preparador">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--Outro Agendamento-->
            <div class="box-agendamento">
                <div class="container-box">
                    <div class="row">
                        <div class="col-lg-2 text-center">
                            <div class="box-gray">
                                <a>xx:xx</a>
                            </div>
                        </div>
                        <div class="col-lg-2 text-center">
                            <div class="box-gray">
                                <a>xx/xx/xx</a>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="box-white">
                                <a>Nome do Medicamento Aqui</a>
                            </div>
                        </div>
                        <div class="col-lg-2">
                            <div class="box-white">
                                <a>Posologia</a>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-9">
                            <div class="box-blue">
                                <a>Nome do Paciente Aqui</a>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="box-blue">
                                <a>Leito: Código</a>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-9"> <!--isso aqui fica hidden--->
                            <div class="box-blue"> 
                                <a>Nome do Preparador Aqui</a> 
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div>
                                <input type="button" id="add_prep" value="Adicionar Preparador">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--Outro Agendamento-->
            <div class="box-agendamento">
                <div class="container-box">
                    <div class="row">
                        <div class="col-lg-2 text-center">
                            <div class="box-gray">
                                <a>xx:xx</a>
                            </div>
                        </div>
                        <div class="col-lg-2 text-center">
                            <div class="box-gray">
                                <a>xx/xx/xx</a>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="box-white">
                                <a>Nome do Medicamento Aqui</a>
                            </div>
                        </div>
                        <div class="col-lg-2">
                            <div class="box-white">
                                <a>Posologia</a>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-9">
                            <div class="box-blue">
                                <a>Nome do Paciente Aqui</a>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="box-blue">
                                <a>Leito: Código</a>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-9"> <!--isso aqui fica hidden--->
                            <div class="box-blue"> 
                                <a>Nome do Preparador Aqui</a> 
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div>
                                <input type="button" id="add_prep" value="Adicionar Preparador">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
  </body>