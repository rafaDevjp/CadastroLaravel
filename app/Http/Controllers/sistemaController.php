<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
class sistemaController extends Controller{


    public function show_dashboard(Request $request){
        // Verifica se existe uma sessão ativa 
        if (!Session::has('logado')) {
           return redirect('/');
        }
        return view('sistema/dashboard');
}




}///END_CLASS