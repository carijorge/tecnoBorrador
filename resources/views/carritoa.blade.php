<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Productos Relacionados') }}
        </h2>
    </x-slot>

    <div class="min-h-screen bg-gray-100 flex flex-col justify-center">
        <div class="relative m-3 flex flex-wrap mx-auto justify-center">

            @foreach($productos as $producto)
                <div class="relative max-w-sm min-w-[340px] bg-white shadow-md rounded-3xl p-2 mx-1 my-3 cursor-pointer">
                    <div class="overflow-x-hidden rounded-2xl relative">
                        <img class="h-40 rounded-2xl w-full object-cover" src="{{ $producto->imagen }}" alt="{{ $producto->nombre }}">

                    </div>
                    <div class="mt-4 pl-2 mb-2 flex justify-between">
                        <div>
                            <p class="text-lg font-semibold text-gray-900 mb-0">{{ $producto->nombre }}</p>
                            <p class="text-md text-gray-800 mt-0">Bs {{ $producto->precio }}</p>
                        </div>
                        <div class="flex flex-col-reverse mb-1 mr-4 group cursor-pointer">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 group-hover:opacity-70" fill="none" viewBox="0 0 24 24" stroke="gray">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                            </svg>
                        </div>
                    </div>
                    <input type="number" class="w-12 border-gray-300 focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm rounded-md" placeholder="Cantidad" id="cantidad_{{ $producto->id }}">
                    <button class="ml-2 bg-blue-500 text-white px-2 py-1 rounded text-sm" onclick="agregarAlCarrito({{ $producto->id }}, '{{ $producto->nombre }}', '{{ $producto->precio }}'); actualizarCantidadEnCarrito({{ $producto->id }}, nuevaCantidad)">Agregar al Carrito</button>
                </div>
            @endforeach

        </div>
        <div class="mt-8">
            <h2 class="text-2xl font-bold tracking-tight text-gray-900">Carrito de Venta</h2>
            <ul id="carritoVenta" class="mt-4 border-t border-gray-200 divide-y divide-gray-200">


            </ul>
        </div>
    </div>

    <script>
     const carrito = [];

        function agregarAlCarrito(idProducto, nombreProducto, precioProducto) {
            const cantidadInput = document.getElementById(`cantidad_${idProducto}`);
            const cantidad = parseInt(cantidadInput.value);

            if (cantidad > 0) {
                const productoExistente = carrito.find(producto => producto.id === idProducto);

                if (productoExistente) {
                    // Si el producto ya está en el carrito, actualizamos la cantidad
                    productoExistente.cantidad = cantidad;
                } else {
                    // Si el producto no está en el carrito, lo agregamos con su precio original
                    const producto = {
                        id: idProducto,
                        nombre: nombreProducto,
                        precio: precioProducto,
                        cantidad: cantidad,
                    };

                    carrito.push(producto);
                }

                actualizarCarrito();
                console.log('Producto(s) agregado(s) al carrito:', carrito);
            } else {
                console.log('La cantidad debe ser mayor que 0');
            }
        }


        function ajustarEspacios(texto, longitud) {
            return texto.padEnd(longitud, ' ');
        }

        function actualizarCarrito() {
            const carritoVenta = document.getElementById('carritoVenta');
            carritoVenta.innerHTML = '';

            // Encabezado
            const header = document.createElement('li');
            header.textContent = ajustarEspacios('Nombre', 1000) + '| Cantidad | Precio Unitario | Subtotal';
            carritoVenta.appendChild(header);

            let total = 0;


            carrito.forEach(producto => {
                const listItem = document.createElement('li');
                const nombreAjustado = ajustarEspacios(producto.nombre, 25);
                const subtotal = producto.precio * producto.cantidad;
                listItem.textContent = `${nombreAjustado} | ${producto.cantidad} | Bs ${producto.precio} | Bs ${subtotal}`;
                total += subtotal;
                carritoVenta.appendChild(listItem);
            });

            // Línea separadora
            const separator = document.createElement('li');
            separator.textContent = '--------------------------------------------------';
            carritoVenta.appendChild(separator);

            // Total
            const totalItem = document.createElement('li');
            totalItem.textContent = ajustarEspacios(`Total: $${total}`, 56);
            carritoVenta.appendChild(totalItem);
        }
        function ajustarEspacios(texto, longitud) {
            const espacioAdicional = longitud - texto.length;
            return texto + ' '.repeat(espacioAdicional);
        }



// Luego, puedes llamar a esta función desde donde sea necesario, por ejemplo, en un botón de "Actualizar" en la lista del carrito


    </script>
</x-app-layout>



