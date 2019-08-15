<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>Cursuri Web - Sandor Kovacs - Web Trainer</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Space+Mono">

        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <script src="{{ asset('js/app.js') }}" defer></script>
    </head>
    <body>
        <div id="app">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <router-link to="/">Acasa</router-link> |
                        <router-link to="/cursuri-web">Cursuri Web</router-link> | 
                        <router-link to="/intrebari-si-raspunsuri">Intrebari si raspunsuri</router-link> | 
                        <a href="https://sandorkovacs84.wordpress.com">Blog</a> | 
                        <router-link to="/contact">Contact</router-link>
                        <router-view></router-view>
                    </div>
                </div>
            </div>
        </div>


    </body>
</html>
