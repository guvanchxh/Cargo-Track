<!-- resources/views/cargos/create.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Создание нового груза</h1>
        <form action="{{ route('cargos.store') }}" method="POST">
            @csrf
            <label for="name">Название груза:</label>
            <input type="text" id="name" name="name"><br><br>

            <label for="description">Описание груза:</label><br>
            <textarea id="description" name="description"></textarea><br><br>

            <button type="submit" class="btn btn-primary">Создать груз</button>
        </form>
    </div>
@endsection
