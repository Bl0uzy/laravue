<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->

    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }
    </style>
</head>
<body class="antialiased">
    <div id="app">
        <div class="container pt-3">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <a class="navbar-brand" href="#">Navbar</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                            <router-link class="nav-link " to="/home">Acueil</router-link>
                        </li>
                        <li class="nav-item">
                            <router-link class="nav-link" to="/tasks">Liste des taches</router-link>
                        </li>
                        <li class="nav-item">
                            <router-link class="nav-link" to="/login">Connexion</router-link>
                        </li>
                    </ul>

                </div>
            </nav>
            <div class="container">
                <router-view></router-view>
            </div>
        </div>
    </div>
    <script src="{{'js/app.js'}}"></script>
</body>
</html>
