<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Bitacora') }}
        </h2>
    </x-slot>
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
            <!-- Contenido específico de la vista -->
            <h1>Listado de Bitácora</h1>
            <ul class="list-disc pl-4">
                <!-- Encabezado -->
                <li class="flex items-center justify-between p-4 border-b font-bold">
                    <span class="w-1/6">Descripcion</span>
                    <span class="w-2/6">Usuario</span>
                </li>
                <!-- Iterar sobre los elementos de la bitácora -->
                @foreach($bitacoras as $bitacora)
                    <li class="flex items-center justify-between p-4 border-b">
                        <span class="w-1/6">{{ $bitacora->Descripcion }}</span>
                        <span class="w-2/6">{{ $bitacora->id_usuario }}</span>
                        <!-- Otros detalles del registro, si es necesario -->
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
</x-app-layout>
