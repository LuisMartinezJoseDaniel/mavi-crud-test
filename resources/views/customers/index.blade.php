@extends('layouts.app')

@section('titulo')
    Adminsitrar clientes
@endsection
@section('contenido')
    <div class="px-5">
        <div  class="mb-8">
            <a href="{{route('customers.create')}}"
                class="bg-sky-600 hover:bg-sky-700 font-bold cursor-pointer rounded-md p-4 text-white w-full"
            >
                Agregar nuevo cliente
            </a>
        </div>


<div class="relative overflow-x-auto shadow-md sm:rounded-lg">
    <table id="customersTable" class="w-full text-sm text-left">
        <thead  class="text-xs text-gray-800 uppercase dark:text-gray-800">
            <tr>
                <th scope="col" class="px-6 py-3 ">
                    Nombre
                </th>
                <th scope="col" class="px-6 py-3">
                   Apellido paterno
                </th>
                <th scope="col" class="px-6 py-3 ">
                    Apellido materno
                </th>
                <th scope="col" class="px-6 py-3">
                    Dirección
                </th>
                <th scope="col" class="px-6 py-3">
                    Correo
                </th>
                <th scope="col" class="px-6 py-3">
                    Acciones
                </th>
            </tr>
        </thead>
        <tbody id="customersTableBody">

        </tbody>
    </table>
</div>

    </div>
@endsection


@push('js')
 @vite("resources/js/customers")
@endpush

