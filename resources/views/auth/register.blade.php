@extends('layouts.app')


@section('titulo')
Registrate en Mavi
@endsection

@section('contenido')
    <div class="md:flex place-content-center mx-4">
        <div class="md:w-1/3 bg-white rounded-lg shadow-md p-6">
            <div id="errorsContainer"></div>
            <form id="register">
                @csrf
                <div class="mb-5">
                    <label for="name" class="mb-2 block uppercase text-gray-500 font-bold">Nombre</label>
                    <input
                        type="text" name="name" id="name" placeholder="Tu nombre"
                        class="border p-3 w-full rounded-lg"
                    >

                </div>
                <div class="mb-5">
                    <label for="email" class="mb-2 block uppercase text-gray-500 font-bold">Correo</label>
                    <input
                        type="email" name="email" id="email" placeholder="Tu email de registro"
                        class="border p-3 w-full rounded-lg"
                    >
                </div>
                <div class="mb-5">
                    <label for="password" class="mb-2 block uppercase text-gray-500 font-bold">Password</label>
                    <input
                        type="password" name="password" id="password" placeholder="Tu password de registro"
                        class="border p-3 w-full rounded-lg"
                    >
                </div>
                <div class="mb-5">
                    <label for="password_confirmation" class="mb-2 block uppercase text-gray-500 font-bold">Repite tu password</label>
                    <input
                        type="password"
                        name="password_confirmation"
                        id="password_confirmation"
                        placeholder="Repite tu password"
                        class="border p-3 w-full rounded-lg"
                    >

                </div>

                <input type="submit" value="Crear cuenta"
                    class="bg-sky-600 hover:bg-sky-700 uppercase font-bold cursor-pointer rounded-md p-4 text-white w-full">

            </form>
        </div>
    </div>
@endsection



@push('js')
 @vite("resources/js/auth/register.js")
@endpush
