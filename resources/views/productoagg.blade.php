<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-6">
            <!-- Formulario de Creación de Producto -->
            <form action="{{route('pstore')}}" method="POST">
                @csrf

                <!-- Nombre del Producto -->
                <div class="mb-4">
                    <label for="nombre" class="block text-gray-600">Nombre del Producto</label>
                    <input type="text" name="nombre" id="nombre" class="form-input mt-1 block w-full" required>
                </div>

                <!-- Descripción del Producto -->
                <div class="mb-4">
                    <label for="descripcion" class="block text-gray-600">Descripción del Producto</label>
                    <textarea name="descripcion" id="descripcion" class="form-input mt-1 block w-full" required></textarea>
                </div>

                <!-- Precio del Producto -->
                <div class="mb-4">
                    <label for="precio" class="block text-gray-600">Precio del Producto</label>
                    <input type="number" name="precio" id="precio" class="form-input mt-1 block w-full" required>
                </div>

                <!-- Stock del Producto -->
                <div class="mb-4">
                    <label for="stock" class="block text-gray-600">Stock del Producto</label>
                    <input type="number" name="stock" id="stock" class="form-input mt-1 block w-full" required>
                </div>

                <!-- Codigo del Producto -->
                <div class="mb-4">
                    <label for="codigo" class="block text-gray-600">Codigo del Producto</label>
                    <input type="text" name="codigo" id="codigo" class="form-input mt-1 block w-full" required>
                </div>
                <!-- ubicacion del Producto -->
                <div class="mb-4">
                    <label for="codigo" class="block text-gray-600">Ubicacion del Producto en Inventario</label>
                    <input type="text" name="ubicacion" id="ubicacion" class="form-input mt-1 block w-full" required>
                </div>

                <div class="mb-4">
                    <label for="categoria" class="block text-gray-600">Categoría del Producto</label>
                    <select name="id_categoria" id="id_categoria" class="form-select mt-1 block w-full" required>
                        <option value="" disabled selected>Selecciona una categoría</option>
                        @foreach($categorias as $categoria)
                            <option value="{{ $categoria->id }}">{{ $categoria->descripcion }}</option>
                        @endforeach
                    </select>
                </div>
                <!-- Campo de carga de imagen -->
                <div class="mb-4">
                    <label for="imagen" class="block text-gray-600">Imagen del Producto</label>
                    <input type="file" name="imagen" id="imagen" accept="image/*" onchange="previewImage(this)" />
                    <img id="imagenPreview" class="mt-2" style="max-width: 200px;" />
                </div>
                <!-- Botón de Crear Producto -->
                <div class="mb-4">
                    <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Crear Producto</button>
                </div>
            </form>
        </div>
    </div>
    <!-- En tu formulario blade (crear_producto.blade.php) -->

<!-- Agrega este script al final del archivo -->
<script>
    function previewImage(input) {
        var preview = document.getElementById('imagenPreview');
        var file = input.files[0];
        var reader = new FileReader();

        reader.onloadend = function () {
            preview.src = reader.result;
        }

        if (file) {
            reader.readAsDataURL(file);
        } else {
            preview.src = '';
        }
    }
</script>

</x-app-layout>
