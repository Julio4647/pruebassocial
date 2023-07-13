@extends('layouts.admin.app')

@section('contents')
<div class="p-4 sm:ml-64">
    <div class="p-4 dark:border-gray-700 mt-14">
        <a href="{{ route('clientes') }}" class="text-white bg-gradient-to-br from-green-400 to-green-700 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-green-200 dark:focus:ring-green-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">Regresar</a>
        <h2 style="margin-top: 15px">Agregar Cliente</h2>
        <form action="{{ route('clientes.update', $clients->id) }}"  method="POST" class="w-full max-w-sm mx-auto">
            @csrf
            {{method_field('PUT')}}

            <div class="mb-4 grid grid-cols-3 gap-4">
                <div class="w-4/1">
                    <label for="nombre" class="block text-gray-700 text-sm font-bold mb-2">Nombre:</label>
                    <input type="text" id="nombre" name="nombre" value="{{ $clients->nombre }}" required class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                </div>
                <div class="w-4/1">
                    <label for="apellido" class="block text-gray-700 text-sm font-bold mb-2">Apellido:</label>
                    <input type="text" id="apellido" name="apellido" value="{{ $clients->apellido }}" required class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                </div>
                <div class="w-4/1">
                    <label for="telefono" class="block text-gray-700 text-sm font-bold mb-2">Telefono:</label>
                    <input type="text" id="telefono" name="telefono" value="{{ $clients->telefono }}" required class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                </div>
                <div class="w-4/1">
                    <label for="correo" class="block text-gray-700 text-sm font-bold mb-2">Email:</label>
                    <input type="email" id="correo" name="correo" value="{{ $clients->correo }}" required class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                </div>
                <div class="w-4/1">
                    <label for="fecha_inicio" class="block text-gray-700 text-sm font-bold mb-2">Fecha inicio:</label>
                    <input type="date" id="fecha_inicio" name="fecha_inicio" value="{{ $clients->fecha_inicio }}" required class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                </div>
                <div class="w-4/1">
                    <label for="fecha_vencimiento" class="block text-gray-700 text-sm font-bold mb-2">Fecha Fin:</label>
                    <input type="date" id="fecha_vencimiento" name="fecha_vencimiento" value="{{ $clients->fecha_vencimiento }}" required class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                </div>
                <div class="w-4/1">
                    <label for="fecha_pago" class="block text-gray-700 text-sm font-bold mb-2">Fecha de Pago:</label>
                    <input type="date" id="fecha_pago" name="fecha_pago" value="{{ $clients->fecha_pago }}" required class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                </div>
                <div class="w-4/1">
                    @if ($community->count() > 0)
                        <label for="communitys_id" class="block text-gray-700 text-sm font-bold mb-2">Community:</label>
                        <select id="communitys_id" name="communitys_id" required class="appearance-none border rounded w-full py-2 px-3 text-gray-900 leading-tight focus:outline-none focus:shadow-outline">
                            @foreach ($community as $communitys)
                                <option value="{{ $communitys->id }}">{{ $communitys->name }}</option>
                            @endforeach
                        </select>
                    @else
                        <p>No hay administradores disponibles.</p>
                    @endif
                </div>
            </div>
            <div class="text-center">
                <button type="submit" value="Guardar"
                    class="bg-gradient-to-r from-purple-500 to-pink-500 hover:bg-gradient-to-l focus:ring-4 focus:outline-none focus:ring-purple-200 dark:focus:ring-purple-800 text-white font-medium rounded-lg text-sm px-5 py-2.5">
                    Guardar cambios
                </button>
            </div>
        </form>
    </div>
</div>


@endsection
