@extends('adminlte::page')

@section('title', "Detalhes do Plano {$plan->name}")

@section('content_header')
    <h1>
        Detalhes do Plano <strong>{{ $plan->name }}</strong>
        {{-- <a href="{{route('plans.create')}}" class="btn btn-dark">ADD</a> --}}
    </h1>
@stop

@section('content')
    <div class="card">
        <ul>
            <li>
                <strong>Nome: </strong> {{ $plan->name }}
            </li>
            <li>
                <strong>URL: </strong> {{ $plan->url }}
            </li>
            <li>
                <strong>Preço: </strong> R$ {{ number_format($plan->price, 2, ',', '.') }}
            </li>
            <li>
                <strong>Descrição: </strong> {{ $plan->description }}
            </li>
        </ul>
    </div>
@stop
