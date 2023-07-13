@extends('adminlte::page')

@section('title', 'Cadastrar Novo Plano')

@section('content_header')
    <h1>
        Cadastrar Novo Plano
        {{-- <a href="{{route('plans.create')}}" class="btn btn-dark">ADD</a> --}}
    </h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            <form action="{{route('plans.store')}}" class="form" method="POST">
                @csrf

                <div class="form-group">
                    <label for="name">Nome</label>
                    <input type="text" name="name" class="form-control" placeholder="Nome:">
                </div>
                <div class="form-group">
                    <label for="price">Preço</label>
                    <input type="text" name="price" class="form-control" placeholder="Preço:">
                </div>
                <div class="form-group">
                    <label for="description">Descricao</label>
                    <input type="text" name="description" class="form-control" placeholder="Desccrição:">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-dark">Enviar</button>
                </div>
            </form>
        </div>
    </div>
@stop
