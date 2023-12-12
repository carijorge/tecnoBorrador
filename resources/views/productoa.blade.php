<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <!-- Agrega este botón antes de la lista de productos -->
        <a href="{{route('pcreate')}}" class="bg-blue-500 text-white px-4 py-2 rounded">Crear Nuevo Producto</a>
    <br><br>
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <!-- Contenido específico de la vista -->
                <h1>Lista de Productos</h1>

                <!-- Mostrar la lista de productos -->
                @foreach($productos as $producto)
                <div class="flex items-center justify-between p-4 border-b">
                    <div class="flex items-center space-x-4">
                        <!-- Mostrar la foto del producto -->
                        <img src="{{ $producto->imagen }}" alt="{{ $producto->nombre }}" class="w-10 h-10 object-cover rounded-full">

                        <!-- Mostrar el nombre del producto -->
                        <span>{{ $producto->nombre }}</span>
                        <span>{{ $producto->stock }}</span>
                        <span>{{ $producto->precio }} Bs</span>
                        <span>{{ $producto->codigo }}</span>
                    </div>
                    <!-- Otros detalles del producto, si es necesario -->
                </div>
            @endforeach
            </div>
        </div>
</x-app-layout>
<script>
    function openModal() {
        document.getElementById('myModal').style.display = 'block';
    }

    function closeModal() {
        document.getElementById('myModal').style.display = 'none';
    }
</script>
