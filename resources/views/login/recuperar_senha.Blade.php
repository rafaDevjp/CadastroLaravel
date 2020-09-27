@extends('layout/app')
@section('titulo')
Recuperar Senha
@endsection


@section('Conteudo-dinamico')

<section>

    <div id="login" class="container-fluid bg_tela justify-content-center d-flex align-items-center">

        <div id="formulario" class="col-lg-3 p-3 shadow">

            <div class="p-4 text-center">
                <h2>Recuperar senha</h2>
                {{---Errors feed-back here---}}
            </div>
            <form action="recuperar_senha" method="post">
                @csrf
                <div class="form-group">
                    <label for="Email">Email</label>
                    <input type="email" name="email" class="form-control bg_input border-warning2" id="">
                </div>
                {{-- <div class="form-group">
                    <label for="senha">Senha</label>
                    <input type="password" name="senha" class="form-control bg_input border-warning2" id="">
                </div> --}}
                <div class="form-group text-center p-3">
                    <input type="submit" class="btn btn-outline-light btn-block" value="Recuperar Agora">
                    <small><a class="text-decoration-none text-light" href="{{route('inicio')}}">Cancelar</a></small>
                </div>
            </form>
        </div>
    </div>



</section>


@endsection