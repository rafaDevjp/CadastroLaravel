<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\usuario;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
class usuariosController extends Controller{
    //COntrolador métodos  dos usuarios 




   //apresentar view de login ou uma sessão ja ativa
    public function index(){
         if (! Session::has('logado')) {
              return $this->login();
         }else{
            return view('sistema/dashboard');
         }
     
   }
   //apresentar view de login de usuarios
    public function login(){
       return view('login/login');
   }

  
   //Submeter dados de login para validação do usuario
   public function logar_usuario(Request $request){
          //valida dados q vem do formulario
          $request->validate([
               'usuario' => 'required',
               'senha' => 'required|Min:6'
               ]);

          //Verifica se existe o usuario no  DB
          $usuarios = usuario::where('nome', $request->usuario)
                              ->orWhere('email', $request->usuario)->first();
        
          if ($usuarios == null) { //se retorno for NULL, exibe erro.
               $feed_errors = ['Esta conta não existe.'];
               return view('login/login', compact('feed_errors'));
          }
          if ( ! Hash::check($request->senha, $usuarios->senha)) { //verifica se a senha esta correta. 
               $feed_errors = ['Senha está incorreta.']; //se a senha nao estiver correta, exibe erro.
               return view('login/login', compact('feed_errors'));
          }

          //ABRIR SESSÂO DE USUARIOS
          Session::put('logado', 'logado');
          Session::put('id_usuario', $usuarios->id_usuario);
          Session::put('nome', $usuarios->nome);
          Session::put('email', $usuarios->email);
      
          return redirect('/dashboard_inicio');
          
   }

     //Função de logout
     public function logout(){
          // Destroy a sessão ativa 
          Session::flush();
          return redirect('/');
     }


   //apresentar view de cadastro de usuarios
    public function show_registro(){
       return view('login/registro');
   }

   //Submeter os valores de Registros para cadastrar novo usuario
   public function cadastrar_usuario(Request $request){

          //Validação de Formulario via servidor
          $request->validate([
               'nome' => 'bail|required',
               'data_nasc' =>'required',
               'email' => 'required|email',
               'telefone' => 'required|numeric',
               'senha' => 'required|Min:6',
               'conf-senha' => 'required|same:senha'
          ]);

          //Verifica se ja existe usuarioe email cadastrado

          $dados = usuario::where('email', $request->email)
                          ->orWhere('nome', $request->nome)
                          ->get();
                          if ($dados->count() != 0 ) {
                               $feed_errors = ['Usuário ou E-mail já existe!!'];
                               return view('login/registro', compact('feed_errors'));
                          }else{

                          //guardar os dados no banco 

                          $usuarios = new usuario;
                          $usuarios->nome = $request->nome;
                          $usuarios->data_nasc = $request->data_nasc;
                          $usuarios->email = $request->email;
                          $usuarios->telefone = $request->telefone;
                          $usuarios->senha = Hash::make($request->senha);
                          $usuarios->save();
                          
                              // $feed_sucesso = ['Dados cadastrados com Sucesso!!'];
                              // return view('login/registro', compact('feed_sucesso'));
                              return redirect('/');
                          }
   }

    //apresentar view de redefinir senha de usuarios
    public function redefinir_senha(){
        return view('login/recuperar_senha');
   }

   //submeter formulario de recuperação de senha 
   public function recuperar_senha(Request $request){

          $request->validate([
               'email'=> 'required|email'
          ]);

          
        return 'Recuperoooo!!';
   }

}//AND_CLASS
