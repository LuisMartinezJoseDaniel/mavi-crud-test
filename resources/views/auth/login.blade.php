@extends('layouts.app')


@section('titulo')
    Inicia sesión en Mavi
@endsection

@section('contenido')
    <div class="md:flex place-content-center mx-4">
        <div class="md:w-1/3 bg-white rounded-lg shadow-md p-6">
            <div id="errorsContainer"></div>
            <form id="login">
                @csrf

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
                    <input
                        type="checkbox" name="remember" id="remember"
                        class="border p-3 rounded-lg"
                    >
                    <label for="remember" class="mb-2 text-sm">
                        Mantener mi sesión abierta
                    </label>


                </div>


                <input type="submit" value="Login"
                    class="bg-sky-600 hover:bg-sky-700 uppercase font-bold cursor-pointer rounded-md p-4 text-white w-full">

            </form>
        </div>
    </div>
@endsection



@push('js')
 @vite("resources/js/auth/login.js")
@endpush
