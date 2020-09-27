<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class usuariosController extends Controller{
    //COntrolador métodos  dos usuarios 




   //apresentar view de login de usuarios
    public function index(){
       return view('login/login');
   }

   //Submeter dados de login para validação do usuario
   public function logar_usuario(Request $request){

         $request->validate([
                        'nome' => 'required',
                        'senha' => 'required|Min:6'
                        ]);
                        return"logooouu!!!!!!";
   }

   //apresentar view de cadastro de usuarios
    public function show_registro(){
       return view('login/registro');
   }

   //Submeter os valores de Registros para cadastrar novo usuario
   public function cadastrar_usuario(Request $request){
        return "Cadastrooouu!!!!!!";
   }

    //apresentar view de redefinir senha de usuarios
    public function redefinir_senha(){
        return view('login/recuperar_senha');
   }

   public function recuperar_senha(Request $request){
        return 'Recuperoooo!!';
   }

}//AND_CLASS
