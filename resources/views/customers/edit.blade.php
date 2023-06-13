@extends('layouts.app')

@section('titulo')
    Actualizar registro
@endsection

@section('contenido')
<div class="md:flex place-content-center mx-4">
        <div class="md:w-1/3 bg-white rounded-lg shadow-md p-6">
            <div id="errorsContainer"></div>
            <form id="customersFormUpdate">
                @csrf

                <input type="hidden" id="customerId" value="{{$customer->id}}">
                <div class="mb-5">
                    <label for="nombres" class="mb-2 block uppercase text-gray-500 font-bold">Nombre</label>
                    <input
                        type="text" name="nombres" id="nombres" placeholder="Tu(s) nombre(s)"
                        class="border p-3 w-full rounded-lg"
                        value="{{ old('nombres',  $customer -> nombres)}}"
                    >

                </div>
                <div class="mb-5">
                    <label for="apellido_paterno" class="mb-2 block uppercase text-gray-500 font-bold">
                        Apellido paterno
                    </label>
                    <input
                        type="text" name="apellido_paterno" id="apellido_paterno" placeholder="Tu apellido paterno"
                        class="border p-3 w-full rounded-lg"
                        value="{{ old('apellido_paterno',  $customer -> apellido_paterno)}}"
                    >

                </div>
                <div class="mb-5">
                    <label for="apellido_materno" class="mb-2 block uppercase text-gray-500 font-bold">
                        Apellido materno
                    </label>
                    <input
                        type="text" name="apellido_materno" id="apellido_materno" placeholder="Tu apellido materno"
                        class="border p-3 w-full rounded-lg"
                        value="{{ old('apellido_materno',  $customer -> apellido_materno)}}"
                    >

                </div>
                <div class="mb-5">
                    <label for="correo" class="mb-2 block uppercase text-gray-500 font-bold">Correo</label>
                    <input
                        type="email" name="correo" id="correo" placeholder="Tu correo de registro"
                        class="border p-3 w-full rounded-lg"
                        value="{{ old('correo',  $customer -> correo)}}"
                    >
                </div>
                <div class="mb-5">
                    <label for="domicilio" class="mb-2 block uppercase text-gray-500 font-bold">
                        Domicilio
                    </label>
                    <input
                        type="text" name="domicilio" id="domicilio" placeholder="Especificar domicilio"
                        class="border p-3 w-full rounded-lg"
                        value="{{ old('domicilio',  $customer -> domicilio)}}"
                    >
                </div>


                <input type="submit" value="Actualizar cliente"
                    class="bg-sky-600 hover:bg-sky-700 uppercase font-bold cursor-pointer rounded-md p-4 text-white w-full">

            </form>
        </div>
    </div>
@endsection


@push('js')
 @vite("resources/js/customers/updateCustomer")
@endpush
