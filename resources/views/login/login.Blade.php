@extends('layout/app')
@section('titulo')
Login | Usuários
@endsection


@section('Conteudo-dinamico')

<section>

    <div id="login" class="container-fluid bg_tela justify-content-center d-flex align-items-center">

        <div id="formulario" class="col-lg-3 p-3 shadow">

            <div class="p-4 text-center">
                <h2>LOGIN</h2>
                {{---Errors feed-back here---}}
            </div>
            <form action="logar_usuario" method="post">
                @csrf
                <div class="form-group">
                    <label for="nome">Nome/Email</label>
                    <input type="text" name="nome" class="form-control bg_input border-warning2" id="">
                </div>
                <div class="form-group">
                    <label for="senha">Senha</label>
                    <input type="password" name="senha" class="form-control bg_input border-warning2" id="">
                </div>
                <div class="form-group text-center p-3">
                    <input type="submit" class="btn btn-outline-light btn-block" value="Entrar">
                    <small ><a class="text-decoration-none text-light p-3" href="{{route('registar')}}">Registre-se</a></small> 
                    <small ><a class="text-decoration-none text-light p-3" href="{{route('redefinir')}}">Esqueci a senha</a></small>
                </div>
            </form>
        </div>
    </div>



</section>


@endsection



<!-- <div id="login" class="container-fluid bg_tela justify-content-center d-flex align-items-center">

    <div id="formulario" class="col-lg-3 p-3 shadow">
        <div class="p-4 text-center">
            <h2>LOGIN</h2>
        </div>
        <form action="" method="post">
            <div class="form-group">
                <label for="nome">Nome</label>
                <input type="text" name="nome" class="form-control" id="">
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" class="form-control" id="">
            </div>
            <div class="form-group">
                <label for="senha">Senha</label>
                <input type="password" name="senha" class="form-control" id="">
            </div>
            <div class="form-group text-center p-3">

                <input type="submit" class="btn btn-outline-light btn-block" value="Enviar">
            </div>
        </form>
    </div>
</div> -->