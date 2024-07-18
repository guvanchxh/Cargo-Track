<!-- resources/views/layouts/app.blade.php -->

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Cargo-Track</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
<header>
    <!-- Навигационное меню -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="#">Cargo-Track</a>
            <ul class="navbar-nav mr-auto">
                <li class="nav-item"><a class="nav-link" href="{{ route('cargos.index') }}">Список грузов</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('cargos.create') }}">Создать груз</a></li>
            </ul>
        </div>
    </nav>
</header>

<main>
    @yield('content')
</main>

<footer>
    <!-- Подвал -->
</footer>

<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
