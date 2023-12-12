<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Inventario de Productos') }}
        </h2>
    </x-slot>

    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
            <!-- Contenido específico de la vista -->
            <h1>Listado de Productos en Inventario</h1>
            <ul class="list-disc pl-4">
                <!-- Encabezado -->
                <li class="flex items-center justify-between p-4 border-b font-bold">
                    <span class="w-1/6">Nombre</span>
                    <span class="w-1/8">ubicacion</span>
                    <span class="w-1/8">Stock</span>
                    <span class="w-1/6">fecha_movimiento</span>
                    <span class="w-1/6">motivo_movimiento</span>
                    <span class="w-1/8">cantidad</span>
                </li>
                @foreach($inventarios as $inventario)
                <li class="flex items-center justify-between p-4 border-b">
                    <span class="w-1/6" > {{ $inventario->nombre ?? ''  }}</span>
                    <span class="w-1/8">{{ $inventario->ubicacion ?? ''  }}</span>
                    <span class="w-1/8">{{ $inventario->stock ?? ''  }} </span>
                    <span class="w-1/6">{{ $inventario->fecha_movimiento ?? ''  }}</span>
                    <span class="w-1/5" > {{ $inventario->motivo_movimiento ?? ''  }}   </span>
                    <span class="w-1/8">{{ $inventario->cantidad ?? ''  }}</span>
                    <!-- Otros detalles del producto, si es necesario -->
                </li>
                @endforeach
            </ul>
        </div>
    </div>
</x-app-layout>
