@extends('layout/app')
@section('titulo')
Login | Registre-se
@endsection


@section('Conteudo-dinamico')
<section>
    <div id="login" class="container-fluid bg_tela justify-content-center d-flex align-items-center">

        <div id="formulario" class="col-lg-4 p-3 shadow">
            <div class="p-4 text-center">
                <h2>Registre-se</h2>
                {{-- Errors feed-back here --}}

            </div>
            <form action="cadastrar_usuario" method="post">
                  @csrf
                <div class="row">
                    <div class="form-group col-lg-7">
                        <label for="nome">Nome</label>
                        <input type="text" name="nome" class="form-control border-warning2" id="">
                    </div>
                    <div class="form-group col-lg-5">
                        <label for="data-nasc">Nascimento</label>
                        <input type="date" name="data-nasc" class="form-control border-warning2" id="">
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-lg-7">
                        <label for="email">Email</label>
                        <input type="email" name="email" class="form-control border-warning2" id="">
                    </div>
                    <div class="form-group col-lg-5">
                        <label for="telefone">Telefone</label>
                        <input type="tel" name="telefone" class="form-control border-warning2" id="">
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-lg-6">
                        <label for="senha">Senha</label>
                        <input type="password" name="senha" class="form-control border-warning2" id="">
                    </div>
                    <div class="form-group col-lg-6">
                        <label for="conf-senha">Conf - Senha</label>
                        <input type="password" name="conf-senha" class="form-control border-warning2" id="">
                    </div>
                </div>

                <div class="form-group text-center p-3">
                    <input type="submit" class="btn btn-outline-light btn-block border-warning2" value="Enviar">
                    <small><a class="text-decoration-none text-light" href="{{route('inicio')}}">Logar-se</a></small>
                </div>
            </form>
        </div>
    </div>
</section>
@endsection