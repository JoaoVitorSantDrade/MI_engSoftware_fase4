<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
    <link href="{{ ('css/navbar-style.css') }}" rel="stylesheet"> 
    <link href="{{ ('bootstrap/css/bootstrap.css') }}" rel="stylesheet">
</head>
<body>
  <header id="header">
    
    <div class="d-flex align-items-center justify-content-between">
      <div class="d-flex">
        <a href="{{ route('editarPerfil') }} " class="user"> <i class="fas fa-user"></i></a>
        <div class="col-lg-3">
          <h2><a href="{{ route('editarPerfil') }}">NOME FUNCIONÁRIO</a></h2>
        </div>
      </div>
    
      <div class="d-flex align-items-center pr-5">    
        <nav class="nav d-none d-lg-block">
          <ul>
            <li class="title-nav"><a href="{{ route('menu') }}">INÍCIO</a></li>
            <li class="drop-down title-nav"><a>PACIENTES <i class="fas fa-angle-down"></i></a>
                <ul>
                    <li><a href="{{ route('cadastroPaciente') }}">Cadastro de pacientes</a></li>
                    <li><a href="{{ route('pacientes') }}">Pacientes e prontuários</a></li>
                </ul>
            </li>
     
            <li class="drop-down title-nav"><a>AGENDAMENTOS E<br> MEDICAMENTOS <i class="fas fa-angle-down"></i></a>
              <ul>
                <li class=""><a href="{{ route('agendamentos') }}">Verificação de agendamentos</a></li>
                <li class=""><a href="{{ route('meusAgendamentos') }}">Meus agendamentos</a></li>
                <li class=""><a href="{{ route('agendamentosRealizados') }}">Meus agendamentos realizados</a></li>
                <!-- Enfermeiro chefe 
                <li class=""><a href="{{ route('cadastroAgendamento') }}">Cadastro de agendamentos</a></li>
                <li class=""><a href="{{ route('listaAgendamentos') }}">Listagem de agendamentos</a></li>
                <li class=""><a href="{{ route('cadastroMedicamento') }}">Cadastro de medicamentos</a></li>
                <li class=""><a href="{{ route('listaMedicamento') }}">Medicamentos cadastados</a></li>
                <li class=""><a href="{{ route('responsaveis') }}">Responsáveis por aplicação</a></li>
                -->
              </ul>
            </li>
          
            <!-- Enfermeiro chefe   
            <li class="drop-down title-nav"><a>PLANTONISTAS <i class="fas fa-angle-down"></i></a>
              <ul>
                <li class=""><a href="{{ route('cadastroPlantonista') }}">Cadastro de plantonista</a></li>
                <li class=""><a href="{{ route('listagemPlantonistas') }}">Listagem de plantonista</a></li>
              </ul>
            </li>
          -->
          <li><a href="{{ route('index') }}" class="logout-icon"> <i class="fas fa-sign-out-alt"></i></a></li>
         
          </ul>
        </nav>
    </div>
    </div>
  </header>
</body>
</html>