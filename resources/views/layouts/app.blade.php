<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel DC Comics</title>

        {{-- Includiamo gli assets con la direttiva @vite --}}
        @vite('resources/js/app.js')
    </head>
    <body>

        {{-- Potenziale partials --}}
        <header>
            <div class="row">
                <div class="col text-center">

                    Header

                </div>
            </div>
        </header>

        <main>
            @yield('content')
        </main>


        {{-- Potenziale partials --}}
        <footer>
            <div class="row">
                <div class="col text-center">

                    Header

                </div>
            </div>
        </footer>

    </body>
</html>
