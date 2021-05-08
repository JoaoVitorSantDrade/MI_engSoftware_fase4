<?php

namespace App\Http\Controllers;

use App\Models\Administrador;
use App\Models\Enfermeiro_chefe;
use App\Models\Estagiario;
use App\Models\Responsavel;
use App\Models\Usuario;
use App\Models\Enfermeiro;
use Illuminate\Http\Request;
//use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use PhpParser\Node\Stmt\ElseIf_;

class AdminController extends Controller
{

    public function menu(){
        return view('/admin/menu');
    }

    public function log()
    {
        return view('/admin/log');
    }

    public function atribuicao()
    {
        return view('/admin/atribuicao');
    }

    public function permissao()
    {
        return view('/admin/permissao');
    }

    public function backup()
    {
        return view('/admin/backup');
    }

    public function cadastro()
    {
        return view('/admin/cadastroUsuario');
    }

    public function remocao()
    {  
        
        
        include('..\app\Http\Controllers\db.php'); 
        if (isset($_GET['cpf'])) {
            $cpf = $_GET['cpf'];
            //$atr = $_GET['atr'];    
            $query ="DELETE FROM usuarios WHERE 'CPF' = '$cpf'";
            $status = mysqli_query($connect, $query);            
                    
            return view('/admin/remocaoUsuario',['status'=>$status]);
        } else {
            return view('/admin/remocaoUsuario');
        }       
      
    }

    public function alterarAtribuicao(Request $request){
        echo "Eu to achando a rota";
        include("db.php"); // Importando BD
        $request -> validate([
            'novaAtribuicao' => 'required' // Verificação de preenchimento de campo 
        ]);
        $cpf = $request->cpf;  // Obtenndo CPF
        /*--------Query para obter usuario com o CPF */
        $sql = "SELECT * FROM usuarios where CPF='$cpf'";
        $query = mysqli_query($connect,$sql);
        while($sql = mysqli_fetch_array($query)){ //Percorrendo array com todos os usuarios com determinado cpf
            $atribuicao = $sql["Atribuicao"]; // Obtem array de uma posição
            if($atribuicao != "Estagiario"){
                if($atribuicao == "Enfermeiro"){
                    $sql2 = "SELECT * FROM enfermeiros where CPF='$cpf'";
                    $query2 = mysqli_query($connect,$sql2);
                    while($sql2 = mysqli_fetch_array($query2)){
                        $coren = $sql2["COREN"];
                    }
                }else if($atribuicao == "Enfermeiro Chefe"){
                    $sql2 = "SELECT * FROM enfermeiros_chefes where CPF='$cpf'";
                    $query2 = mysqli_query($connect,$sql2);
                    while($sql2 = mysqli_fetch_array($query2)){
                        $coren = $sql2["COREN"];
                    }
                }else{
                    $coren = null;
                }
                
            }else{
                $coren = null;
            }
        }
        // Encontra a qual tabela o usuario pertence desde que não seja administrador
        
        if($atribuicao != "Administrador"){
            if ($atribuicao == 'Enfermeiro Chefe') {
                if($request->novaAtribuicao == "enfermeiro"){
                    $delete = "DELETE enfermeiros_chefes WHERE CPF='$cpf'";
                    mysqli_query($connect,$delete); // Deleta usuarios
                    $update = "UPDATE usuarios SET Atribuicao = 'Enfermeiro' WHERE CPF='$cpf'";
                    mysqli_query($connect,$update); // atualiza a atribuicao no BD
                    $insert = "INSERT INTO enfermeiros (CPF,COREN,Plantao) VALUES ('$cpf','$coren','false')";
                    mysqli_query($connect,$insert); // Adicioa usuario a novo cargo
                    return redirect() -> back() ->with('msg','O enfermeiro chefe de cpf :'.$cpf.'foi rebaixado para enfermeiro com sucesso!!!!'); //Redireciona para pagina anterior e mostra mensagem de erro
                }else{
                    return redirect() -> back() ->with('msg','Cargo selecionado invalido'); //Redireciona para pagina anterior e mostra mensagem de erro
                }
            }
            else if($atribuicao == 'Enfermeiro'){
                if($request->novaAtribuicao == "enfermeiroChefe"){
                    $delete = "DELETE enfermeiros WHERE CPF='$cpf'";
                    mysqli_query($connect,$delete); // Deleta usuarios
                    $update = "UPDATE usuarios SET Atribuicao = 'Enfermeiro Chefe' WHERE CPF='$cpf'";
                    mysqli_query($connect,$update); // atualiza a atribuicao no BD
                    $insert = "INSERT INTO enfermeiros_chefes (CPF,COREN) VALUES ('$cpf','$coren')";
                    mysqli_query($connect,$insert);// Adicioa usuario a novo cargo
                    return redirect() -> back() ->with('msg','O enfermeiro de cpf :'.$cpf.'foi promovido para enfermeiro chefe com sucesso!!!!'); //Redireciona para pagina anterior e mostra mensagem de erro
                }else{
                    return redirect() -> back() ->with('msg','Cargo selecionado invalido'); //Redireciona para pagina anterior e mostra mensagem de erro
                }
            }
            else if($atribuicao == 'Estagiario'){
                if($request->novaAtribuicao == "enfermeiro"){
                    $delete = "DELETE estagiarios WHERE CPF='$cpf'";
                    mysqli_query($connect,$delete); // Deleta usuarios
                    $update = "UPDATE usuarios SET Atribuicao = 'Estagiario' WHERE CPF='$cpf'";
                    mysqli_query($connect,$update); // atualiza a atribuicao no BD
                    $insert = "INSERT INTO enfermeiros (CPF,COREN,Plantao) VALUES ('$cpf','$request->fcoren','false')";
                    mysqli_query($connect,$insert);// Adicioa usuario a novo cargo
                    return redirect() -> back() ->with('msg','O estagiario de cpf :'.$cpf.'foi promovido para enfermeiro com sucesso!!!!'); //Redireciona para pagina anterior e mostra mensagem de erro
                }else if($request->novaAtribuicao == "enfermeiroChefe"){
                    $delete = "DELETE estagiarios WHERE CPF='$cpf'";
                    mysqli_query($connect,$delete); // Deleta usuarios
                    $update = "UPDATE usuarios SET Atribuicao = 'Enfermeiro Chefe' WHERE CPF='$cpf'";
                    mysqli_query($connect,$update); // atualiza a atribuicao no BD
                    $insert = "INSERT INTO enfermeiros_chefes (CPF,COREN) VALUES ('$cpf','$request->fcoren')";
                    mysqli_query($connect,$insert);// Adicioa usuario a novo cargo
                    return redirect() -> back() ->with('msg','O estagiario de cpf :'.$cpf.'foi promovido para enfermeiro chefe com sucesso!!!!'); //Redireciona para pagina anterior e mostra mensagem de erro
                }else{
                    return redirect() -> back() ->with('msg','Cargo selecionado invalido'); //Redireciona para pagina anterior e mostra mensagem de erro
                }
            }
        }else{       
            return redirect() -> back() ->with('msg','Você não pode alterar o cargo de administradores!!!'); //Redireciona para pagina anterior e mostra mensagem de erro
        }

    }

    public function lupinha(Request $request){
        include("db.php"); // inclusão do banco de dados
        $user = null; // garantia de existência da variavel
        // busca do usuario no banco de dados
        $sql = "SELECT * FROM usuarios where CPF = '$request->cpf_user'";
        $query = mysqli_query($connect,$sql);
        while($sql = mysqli_fetch_array($query)){ //percorrendo array de usuarios com determinado cpf
            $user = $sql; //retorno do usuario
        }
        /*garantido que usuario foi pego na busca*/
        if($user != null){
            if($user["Atribuicao"] == "Enfermeiro Chefe"){
                $sql2 = "SELECT * FROM enfermeiros_chefes where CPF = '$request->cpf_user'";
                $query2 = mysqli_query($connect,$sql2);
                while($sql2 = mysqli_fetch_array($query2)){ //percorrendo array de usuarios com determinado cpf
                    $user2 = $sql2; //retorno do usuario
                    return view('/admin/atribuicao', ['user' => $user],['user2' => $user2]); // se encontrou retorna usuario para view 
                }
            }elseif($user["Atribuicao"] == "Enfermeiro"){
                $sql2 = "SELECT * FROM enfermeiros where CPF = '$request->cpf_user'";
                $query2 = mysqli_query($connect,$sql2);
                while($sql2 = mysqli_fetch_array($query2)){ //percorrendo array de usuarios com determinado cpf
                    $user2 = $sql2; //retorno do usuario
                    return view('/admin/atribuicao', ['user' => $user], ['user2' => $user2]); // se encontrou retorna usuario para view 
                }
            }else{
                return view('/admin/atribuicao', ['user' => $user]); // se encontrou retorna usuario para view 
            }
           
        }
        else{
            return redirect() -> back() ->with('msg','CPF não cadastrado no sistema!!'); //Redireciona para pagina anterior e mostra mensagem de erro
        }
    }
    
    public function salvarUsuario(Request $request){
        
        //busca o cpf
        $existeCPF = DB::table('usuarios')->where('CPF', $request->fcpf)->first();    
           
        //se já existir o cpf
        if($existeCPF)   
             return redirect()->route('salvarUsuario')->with('error', "CPF já existente!");
       
        //validação de erro
        $validator = Validator::make($request->all(), [     
            'CPF' => 'required|min:14|max:14',
       ]);
        
       //redirecionando o usuario após erro 
        if ($validator->fails()) {
           return redirect()->route('salvarUsuario')->with('error', "Digite um CPF válido!!");   
         }      
         
        //se não existir cpf, cria usuário
         Usuario::Create([
            'CPF' => $request->fcpf,
            'Nome' => $request->fnome,
            'Senha' => '12345',                                 //exemplo de senha
            //'Senha' => bcrypt($request->fsenha);               // PARA ALTERAR A SENHA, NÃO SALVAR COMO RECEBE
            //Hash::make('password'),                                               VERIFICAR TAMANHO DE SENHA
            'Email' => $request->femail,
            'Data_Nasc' => $request->fnascimento,
            'Atribuicao' => $request->fatribui,
            'Sexo' => $request->fsexo,
            'Ip' => $request->ip(), 
            ]);        
         
        //Adiciona usuário em tabelas correspondentes ao cargo
        if ($request->fatribui == 'Administrador'){
            Administrador::Create([
                'CPF' => $request->fcpf,
            ]);
        }else{
            Responsavel::Create([
                'CPF' => $request->fcpf,
            ]);
            
            if ($request->fatribui == 'Enfermeiro Chefe') {
                Enfermeiro_chefe::Create([
                    'CPF' => $request->fcpf,
                    'COREN' => '01-AC00024',   //TROCAR ISSO
                ]);
            }
            else if ($request->fatribui == 'Enfermeiro') {
                Enfermeiro::Create([
                    'CPF' => $request->fcpf,
                    'COREN' => '01-SP00100',   //TROCAR ISSO
                    'Plantao' => '1',           //TROCAR ISSO
                ]); 
            }else if ($request->fatribui == 'Estagiario') {
                Estagiario::Create([
                    'CPF' => $request->fcpf,
                    'Plantao' => '0',           //TROCAR ISSO
                ]);
            }   
        }         
         
        return redirect()->route('salvarUsuario')->with('success','Usuário cadastrado com sucesso!!');
     }

    public function busca(Request $request)
    {          
        
        include('..\app\Http\Controllers\db.php');        
        $query = "SELECT * FROM usuarios WHERE CPF= '$request->cpf_user'";
        $result = mysqli_query($connect, $query);       
        $user = mysqli_fetch_array($result);
        
        
        if ($user == null) {
            $user = 0;
            $atribuicao = 0;
        }

        if($user != 0){
            if(strcmp($user['Atribuicao'],"Enfermeiro") == 0){
                $enfermeiro = mysqli_query($connect, "SELECT * FROM enfermeiros WHERE CPF= '$request->cpf_user'");
                $atribuicao = mysqli_fetch_array($enfermeiro);  
            }else if(strcmp($user['Atribuicao'], "Enfermeiro Chefe") == 0){
                $enfermeiro_Chefe = mysqli_query($connect, "SELECT * FROM enfermeiros_chefes WHERE CPF= '$request->cpf_user'");   
                $atribuicao = mysqli_fetch_array($enfermeiro_Chefe);   
            }else{
                $atribuicao = 0;
            }
        }
        return view('/admin/remocaoUsuario', ['user' => $user, 'atribuicao'=> $atribuicao]);
        
    }
}
