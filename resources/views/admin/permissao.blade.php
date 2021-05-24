<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
    <link href="{{ 'css/style.css' }}" rel="stylesheet">
    <link href="{{ 'bootstrap/css/bootstrap.css' }}" rel="stylesheet">

    <!-- Favicons -->
    <link href="{{ asset('img/favicon.png') }}" rel="icon">

    <script src="{{ 'js/permissao.js' }}" defer></script>

    <title>Permissões do usuário</title>

</head>

<body>
    <!----------Hearder------------>
    @include('layouts.navbar-adm')
    <!----------End Hearder-------->

    <h1>ALTERAR PERMISSÕES</h1>
    <div class="container-80">
        <div class="box" id="permission">
            <!--Buscar funcionário-->
            <div class="content-center">
                <h3>SELECIONE O TIPO DE CARGO</h3>
                <form action="/editarPermissao" method="GET">
                    <select id="atribuicao" name="atribuicao" onchange="this.form.submit()">
                        <option value="admin">Administrador</option>
                        <option value="enfermeiroChefe">Enfermeiro chefe</option>
                        <option value="enfermeiro">Enfermeiro</option>
                        <option value="estagiario">Estagiário</option>
                    </select>
                </form>
            </div>
            <br>

            <!---------------- Alterar permissões ---------------->
            <form action="/alterarPermissao" method="get">
                @csrf
                <h3 id="Nome_Permissao" class="content-center"> </h3> <br>
                <!-- ========== Linha 1 (REFERENTE AO ADM) ========== -->
                <div class="container">
                    <div class="row">
                        <div class="col-lg">
                            @if (session('msg'))
                                <!-- Verifica se a mensagem de erro foi instanciada -->
                                <div class="msg-sucess">
                                    {{ session('msg') }}
                                    <!--Obtem mensagem de erro -->
                                </div>
                            @endif
                            @if (session('msg-error'))
                                <!-- Verifica se a mensagem de erro foi instanciada -->
                                <div class="msg-error">
                                    {{ session('msg-error') }}
                                    <!--Obtem mensagem de erro -->
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
                @if (isset($p))
                    <div class="row">
                        <!--Inicio da permissão-->
                        @if (isset($p[1]))
                            <div class="col-lg-13 content-center">
                                <input type="checkbox" name="adm" id="p1" {{ $p[1] }}><br>
                                <label>Cadastro de funcionário</label>
                            </div>
                        @endif
                        <!--Fim da permissão-->


                        <!--Inicio da permissão-->
                        @if (isset($p[2]))
                            <div class="col-lg-13 content-center">
                                <input type="checkbox" name="adm" id="p2" {{ $p[2] }}><br>
                                <label>Remoção de funcionário</label>
                            </div>
                        @endif
                        <!--Fim da permissão-->

                        <!--Inicio da permissão-->
                        @if (isset($p[3]))
                            <div class="col-lg-13 content-center">
                                <input type="checkbox" name="adm" id="p3" {{ $p[3] }}><br>
                                <label>Alterar atribuição do funcionário</label>
                            </div>
                        @endif
                        <!--Fim da permissão-->

                        <!--Inicio da permissão-->
                        @if (isset($p[4]))
                            <div class="col-lg-13 content-center">
                                <input type="checkbox" name="adm" id="p4" {{ $p[4] }}><br>
                                <label>Editar permissões de cargo</label>
                            </div>
                        @endif
                        <!--Fim da permissão-->

                        <!--Inicio da permissão-->
                        @if (isset($p[5]))
                            <div class="col-lg-13 content-center">
                                <input type="checkbox" name="adm" id="p5" {{ $p[5] }}><br>
                                <label>Visualizar permissões de cargo</label>
                            </div>
                        @endif
                        <!--Fim da permissão-->

                        @if (isset($p[6]))
                            <!--Inicio da permissão-->
                            <div class="col-lg-13 content-center">
                                <input type="checkbox" name="adm" id="p6" {{ $p[6] }}><br>
                                <label>Realizar / Agendar Backup</label>
                            </div>
                        @endif
                        <!--Fim da permissão-->
                    </div>
                    <!-- ========== fim da linha 1 ========== -->

                    <!-- ========== Linha 2 ========== -->
                    <h3 id="title" >Pacientes e prontuários</h3><br>
                    <div class="row">
                        @if (isset($p[16]))
                            <!--Inicio da permissão-->
                            <div class="col-lg-13 content-center">
                                <input type="checkbox" name="paciente" id="p16" {{ $p[16] }}><br>
                                <label>Cadastro de pacientes</label>
                            </div>
                        @endif
                        <!--Fim da permissão-->

                        <!--Inicio da permissão-->
                        @if (isset($p[17]))
                            <div class="col-lg-13 content-center">
                                <input type="checkbox" name="paciente" id="p17" {{ $p[17] }}><br>
                                <label>Visualizar pacientes e prontuários</label>
                            </div>
                        @endif
                        <!--Fim da permissão-->

                        <!--Inicio da permissão-->
                        @if (isset($p[34]))
                            <div class="col-lg-13 content-center">
                                <input type="checkbox" name="paciente" id="p34" {{ $p[34] }}><br>
                                <label>Visualizar histórico de prontuários</label>
                            </div>
                        @endif
                        <!--Fim da permissão-->

                        <!--Inicio da permissão-->
                        @if (isset($p[18]))
                            <div class="col-lg-13 content-center">
                                <input type="checkbox" name="paciente" id="p18" {{ $p[18] }}><br>
                                <label>Acesso ao prontuário do paciente</label>
                            </div>
                        @endif
                        <!--Fim da permissão-->

                        <!--Inicio da permissão-->
                        @if (isset($p[19]))
                            <div class="col-lg-13 content-center">
                                <input type="checkbox" name="paciente" id="p19" {{ $p[19] }}><br>
                                <label>Editar informações pessoais do paciente</label>
                            </div>
                        @endif
                        <!--Fim da permissão-->

                        <!--Inicio da permissão-->
                        @if (isset($p[9]))
                            <div class="col-lg-13 content-center">
                                <input type="checkbox" name="paciente" id="p9" {{ $p[9] }}><br>
                                <label>Cadastro de CID</label>
                            </div>
                        @endif
                        <!--Fim da permissão-->

                        <!--Inicio da permissão-->
                        @if (isset($p[10]))
                            <div class="col-lg-13 content-center">
                                <input type="checkbox" name="paciente" id="p10" {{ $p[10] }}><br>
                                <label>Remoção de CID</label>
                            </div>
                        @endif
                        <!--Fim da permissão-->

                        <!--Inicio da permissão-->
                        @if (isset($p[26]))
                            <div class="col-lg-13 content-center">
                                <input type="checkbox" name="paciente" id="p26" {{ $p[26] }}><br>
                                <label>Visualizar ocorrências do paciente</label>
                            </div>
                        @endif
                        <!--Fim da permissão-->

                        <!--Inicio da permissão-->
                        @if (isset($p[27]))
                            <div class="col-lg-13 content-center">
                                <input type="checkbox" name="paciente" id="p27" {{ $p[27] }}><br>
                                <label>Registro de ocorrências</label>
                            </div>
                        @endif
                        <!--Fim da permissão-->

                        <!--Inicio da permissão-->
                        @if (isset($p[31]))
                            <div class="col-lg-13 content-center">
                                <input type="checkbox" name="paciente" id="p31" {{ $p[31] }}><br>
                                <label>Inserir data de internação do paciente</label>
                            </div>
                        @endif
                        <!--Fim da permissão-->

                        <!--Inicio da permissão-->
                        @if (isset($p[32]))
                            <div class="col-lg-13 content-center">
                                <input type="checkbox" name="paciente" id="p32" {{ $p[32] }}><br>
                                <label>Inserir data de saída do paciente</label>
                            </div>
                        @endif
                        <!--Fim da permissão-->

                        <!--Inicio da permissão-->
                        @if (isset($p[33]))
                            <div class="col-lg-13 content-center">
                                <input type="checkbox" name="paciente" id="p33" {{ $p[33] }}><br>
                                <label>Cadastrar prontuário</label>
                            </div>
                        @endif
                        <!--Fim da permissão-->

                    </div>
                    <!-- ========== fim da linha 2 ========== -->

                    <!-- ========== Linha 3 ========== -->
                    <h3 id="title-2">Gerenciamento hospitalar</h3><br>
                    <div class="row">
                        <!--Inicio da permissão-->
                        @if (isset($p[28]))
                            <div class="col-lg-13 content-center">
                                <input type="checkbox" name="gerenciamento_hospitalar" id="p28" {{ $p[28] }}><br>
                                <label>Cadastro e Alocação do leito</label>
                            </div>
                        @endif
                        <!--Fim da permissão-->

                        <!--Inicio da permissão-->
                        @if (isset($p[29]))
                            <div class="col-lg-13 content-center">
                                <input type="checkbox" name="gerenciamento_hospitalar" id="p29" {{ $p[29] }}><br>
                                <label>Remoção do leito</label>
                            </div>
                        @endif
                        <!--Fim da permissão-->
                        
                        <!--Inicio da permissão-->
                        @if (isset($p[8]))
                            <div class="col-lg-13 content-center">
                                <input type="checkbox" name="gerenciamento_hospitalar" id='p8' {{ $p[8] }}><br>
                                <label>Cadastro de medicamentos</label>
                            </div>
                        @endif
                        <!--Fim da permissão-->

                        <!--Inicio da permissão-->
                        @if (isset($p[35]))
                            <div class="col-lg-13 content-center">
                                <input type="checkbox" name="gerenciamento_hospitalar" id="p35" {{ $p[35] }}><br>
                                <label>Listagem de medicamentos cadastrados</label>
                            </div>
                        @endif
                        <!--Fim da permissão-->
                        </div>

                        <!-- ========== fim da linha 3 ========== -->

                        <!-- ========== Linha 4 ========== -->
                        <h3 id="title-3">Gerenciamento de Enfermeiros e Estagiários</h3> <br>
                        <div class="row">

                        <!--Inicio da permissão-->
                        @if (isset($p[7]))
                            <div class="col-lg-13 content-center">
                                <input type="checkbox" name="gerenciamento" id="p7" {{ $p[7] }}><br>
                                <label>Cadastro de plantonista</label>
                            </div>
                        @endif
                        <!--Fim da permissão-->
                        
                        <!--Inicio da permissão-->
                        @if (isset($p[30]))
                            <div class="col-lg-13 content-center">
                                <input type="checkbox" name="gerenciamento" id="p30" {{ $p[30] }}><br>
                                <label>Remoção de plantonista</label>
                            </div>
                        @endif
                        <!--Fim da permissão-->

                        <!--Inicio da permissão-->
                        @if (isset($p[13]))
                            <div class="col-lg-13 content-center">
                                <input type="checkbox" name="gerenciamento" id="p13" {{ $p[13] }}><br>
                                <label>Listagem de plantonistas</label>
                            </div>
                        @endif
                        <!--Fim da permissão-->

                        <!--Inicio da permissão-->
                        @if (isset($p[12]))
                            <div class="col-lg-13 content-center">
                                <input type="checkbox" name="gerenciamento" id="p12" {{ $p[12] }}><br>
                                <label>Alocar responsável por agendamento</label>
                            </div>
                        @endif
                        <!--Fim da permissão-->

                        <!--Inicio da permissão-->
                        @if (isset($p[15]))
                            <div class="col-lg-13 content-center">
                                <input type="checkbox" name="gerenciamento" id="p15" {{ $p[15] }}><br>
                                <label>Listagem de responsáveis por aplicação de medicamentos</label>
                            </div>
                        @endif
                        <!--Fim da permissão-->
                       
                    </div>
                    <!-- ========== fim da linha 4 ========== -->

                    <!-- ========== Linha 5 ========== -->
                    <h3 id="title-4">Agendamentos e medicamentos para aplicação</h3> <br>
                    <div class="row">
                    <!--Inicio da permissão-->
                    @if (isset($p[11]))
                        <div class="col-lg-13 content-center">
                            <input type="checkbox" name="agendamento" id="p11" {{ $p[11] }}><br>
                            <label>Cadastro de agendamento</label>
                        </div>
                    @endif
                    <!--Fim da permissão-->

                    <!--Inicio da permissão-->
                        @if (isset($p[20]))
                            <div class="col-lg-13 content-center">
                                <input type="checkbox" name="agendamento" id="p20" {{ $p[20] }}><br>
                                <label>Listagem de medicamentos para preparação</label>
                            </div>
                        @endif
                        <!--Fim da permissão-->

                        <!--Inicio da permissão-->
                        @if (isset($p[14]))
                            <div class="col-lg-13 content-center">
                                <input type="checkbox" name="agendamento" id="p14" {{ $p[14] }}><br>
                                <label>Listagem de agendamentos cadastrados</label>
                            </div>
                        @endif
                        <!--Fim da permissão-->

                        <!--Inicio da permissão-->
                        @if (isset($p[21]))
                            <div class="col-lg-13 content-center">
                                <input type="checkbox" name="agendamento" id="p21" {{ $p[21] }}><br>
                                <label>Visualização de agendamento realizados pelo usuário</label>
                            </div>
                        @endif
                        <!--Fim da permissão-->

                        <!--Inicio da permissão-->
                        @if (isset($p[22]))
                            <div class="col-lg-13 content-center">
                                <input type="checkbox" name="agendamento" id="p22" {{ $p[22] }}><br>
                                <label>Visualização de agendamento alocados pelo usuário</label>
                            </div>
                        @endif
                        <!--Fim da permissão-->

                        <!--Inicio da permissão-->
                        @if (isset($p[24]))
                            <div class="col-lg-13 content-center">
                                <input type="checkbox" name="agendamento" id="p24" {{ $p[24] }}><br>
                                <label>Nomear-se responsável por preparar a aplicação</label>
                            </div>
                        @endif
                        <!--Fim da permissão-->

                        <!--Inicio da permissão-->
                        @if (isset($p[25]))
                            <div class="col-lg-13 content-center">
                                <input type="checkbox" name="agendamento" id="p25" {{ $p[25] }}><br>
                                <label>Dar baixa no agendamento</label>
                            </div>
                        @endif
                        <!--Fim da permissão-->

                        <!--Inicio da permissão-->
                        @if (isset($p[23]))
                            <div class="col-lg-13 content-center transition-1s">
                                <input type="checkbox" name="agendamento" id="p23" {{ $p[23] }}><br>
                                <label>Aplicar medicamentos</label>
                            </div>
                        @endif
                        <!--Fim da permissão-->
                    </div>
                    <!-- ========== fim da linha 5 ========== -->

                @endif
                <div>
                    <h4 id="num_alteracao"></h4>
                    <button id="alterar" type="submit" class="container-button btn-white hide">Alterar</button>
                </div>
            </form>
        </div>
</body>

</html>
