<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <!-- Agrega este botón antes de la lista de productos -->
    <a href="#" class="bg-blue-500 text-white px-4 py-2 rounded" onclick="openModal()">Crear Nueva Categoría</a>

    <!-- Modal -->
    <div id="myModal" class="hidden fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center">
        <div class="bg-white p-8 max-w-md mx-auto rounded-md">
            <h2 class="text-xl font-semibold mb-4">Crear Nueva Categoría</h2>
                    <!-- Formulario para crear una nueva categoría -->
            <form action="{{ route('cstore') }}" method="POST">
                @csrf

            <div class="mb-4">
                <label for="descripcion" class="block text-sm font-medium text-gray-700">Descripción</label>
                <input type="text" name="descripcion" id="descripcion" class="mt-1 p-2 w-full border rounded-md">
            </div>

            <div class="mb-4">
                <label for="codigo" class="block text-sm font-medium text-gray-700">Código</label>
                <input type="text" name="codigo" id="codigo" class="mt-1 p-2 w-full border rounded-md">
            </div>

            <!-- Otros campos del formulario, si es necesario -->

            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Crear Categoría</button>
        </form>
            <!-- Agrega aquí tu formulario para crear una nueva categoría -->
<br/>
            <button class="bg-blue-500 text-white px-4 py-2 rounded" onclick="closeModal()">Cancelar</button>
        </div>
    </div>
    <br><br>
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <!-- Contenido específico de la vista -->
                <h1>Lista de Categorias</h1>
                <ul class="list-disc pl-4">
                    <!-- Encabezado -->
                    <li class="flex items-center justify-between p-4 border-b font-bold">
                        <span>Descripción</span>
                        <span>Código</span>
                        <span>+</span>
                    </li>
                    @foreach($categorias as $categoria)
                    <li class="flex items-center justify-between p-4 border-b">
                        <span>{{ $categoria->descripcion }}</span>
                        <span>{{ $categoria->codigo }}</span>
                        <!-- Otros detalles de la categoría, si es necesario -->
                        <span>
                            <a href="#" class="text-blue-500 hover:underline">Modificar</a>
                        </span>
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>
</x-app-layout>
<script>
    function openModal() {
        document.getElementById('myModal').classList.remove('hidden');
    }

    function closeModal() {
        document.getElementById('myModal').classList.add('hidden');
    }
</script>
