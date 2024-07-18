<!-- resources/views/cargos/edit.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Редактирование груза</h1>
        <form action="{{ route('cargos.update', $cargo->id) }}" method="POST">
            @csrf
            @method('PUT')
            <label for="name">Название груза:</label>
            <input type="text" id="name" name="name" value="{{ $cargo->name }}"><br><br>

            <label for="description">Описание груза:</label><br>
            <textarea id="description" name="description">{{ $cargo->description }}</textarea><br><br>

            <button type="submit" class="btn btn-primary">Сохранить изменения</button>
        </form>
    </div>
@endsection
