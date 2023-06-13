@extends('layouts.app')

@section('titulo')
@endsection

@section('contenido')
    @guest
        <h1 class="text-center uppercase font-black text-2xl">
            Hola visitante, para entrar al panel por favor inicia sesión
        </h1>
    @endguest

    @auth
        <h1 class="text-center uppercase font-black text-2xl">
            Hola {{ auth()->user()->name }}, bienvenido al panel de administración

        </h1>
        <a class="text-center" href="{{ route('customers.index' )}}"> Ir al panel </button>
    @endauth
@endsection
