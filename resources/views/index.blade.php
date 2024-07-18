
@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Список грузов</h1>
        <a href="{{ route('cargos.create') }}" class="btn btn-primary mb-3">Создать груз</a>
        <ul>
            @foreach($cargos as $cargo)
                <li>{{ $cargo->name }}</li>
            @endforeach
        </ul>
    </div>
@endsection
