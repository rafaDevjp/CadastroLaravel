@extends('layout/app')
@section('titulo')
Dashboard
@endsection

@section('Conteudo-dinamico')
    <section>
        <h1>Dashboard</h1><small>Usuario: {{session('nome')}} </small>
        <a href="logout" class="btn btn-sm btn-primary"> sair </a>
    </section>
@endsection