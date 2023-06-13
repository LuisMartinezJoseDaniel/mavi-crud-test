<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>MAVI</title>
        <meta name="csrf-token" content="{{ csrf_token() }}" />


        @vite('resources/css/app.css')
        @vite("resources/js/app.js")

    </head>
    <body class="bg-gray-100">
        <header class="p-5 border-b bg-white shadow">
            <div class="container mx-auto flex justify-between items-center">
                <h1 class="text-3xl font-black">
                    <a href="{{route('customers.index')}}">MAVI</a>
                </h1>

                <nav class="flex gap-4 items-center">
                    @guest
                        <a class="font-bold uppercase text-sm" href="{{ route('login') }}">
                            Iniciar sesión
                        </a>
                        <a class="font-bold uppercase text-sm bg-sky-500 p-3 text-white rounded-md" href="{{ route('register') }}">Crear cuenta</a>
                    @endguest

                    @auth

                        <p class="font-bold uppercase text-sm">Hola:
                            <span class="font-normal">{{ auth()->user()->name }}</span>
                        </p>
                        <form action="{{ route('logout')}}" method="POST">
                            @csrf
                            <button type="submit" class="font-bold uppercase text-sm">
                                Cerrar sesión
                            </button>

                        </form>

                    @endauth

                </nav>
            </div>

        </header>

        <main class="container mx-auto mt-10">
            <h2 class="font-black text-3xl mb-10 text-center">
                @yield('titulo')
            </h2>

            @yield('contenido')
        </main>

        <footer class="text-center p-5 text-gray-500 font-bold uppercase mt-10">
            MAVI - Todos los derechos reservados {{ now()->year }}
        </footer>

     @stack('js')
    </body>
</html>
