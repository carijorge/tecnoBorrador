<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SALUD 360</title>
  <!-- Agregar el enlace al archivo de estilos de Tailwind CSS -->
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
  <!-- Agregar el enlace al archivo de la biblioteca FontAwesome -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
          <!-- Fonts -->
          <link rel="preconnect" href="https://fonts.bunny.net">
          <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

          <!-- Scripts -->
          @vite(['resources/css/app.css', 'resources/js/app.js'])

          <!-- Styles -->
          @livewireStyles
</head>
<body class="bg-gray-100">
    <div class="flex flex-col h-screen bg-gray-100">

        <!-- Barra de navegación superior -->
        <div class="bg-white text-white shadow w-full p-2 flex items-center justify-between">
            <div class="flex items-center">
                <div class="flex items-center"> <!-- Mostrado en todos los dispositivos -->
                    <img src="https://www.emprenderconactitud.com/img/POC%20WCS%20(1).png" alt="Logo" class="w-28 h-18 mr-2">
                    <h2 class="font-bold text-xl">Nombre de la Aplicación</h2>
                </div>
                <div class="md:hidden flex items-center"> <!-- Se muestra solo en dispositivos pequeños -->
                    <button id="menuBtn">
                        <i class="fas fa-bars text-gray-500 text-lg"></i> <!-- Ícono de menú -->
                    </button>
                </div>
            </div>

            <!-- Ícono de Notificación y Perfil -->
            <div class="space-x-5">
                <button>
                    <i class="fas fa-bell text-gray-500 text-lg"></i>
                </button>
                <!-- Botón de Perfil -->
                <button>
                    <i class="fas fa-user text-gray-500 text-lg"></i>
                </button>
            </div>
        </div>

        <!-- Contenido principal -->
        <div class="flex-1 flex flex-wrap">
            <!-- Barra lateral de navegación (oculta en dispositivos pequeños) -->
            <div class="p-2 bg-white w-full md:w-60 flex flex-col md:flex hidden" id="sideNav">
                <nav>
                    <ul class="space-y-2">
                        <li class="opcion-con-desplegable">
                          <div class="flex items-center justify-between p-2 hover:bg-white">
                            <div class="flex items-center">
                              <i class="fas fa-calendar-alt mr-2"></i>
                              <span>Material</span>
                            </div>
                            <i class="fas fa-chevron-down text-xs"></i>
                          </div>
                          <ul class="desplegable ml-4 hidden">
                            <li>
                              <a href="{{route('pa')}}" class="block p-2 hover:bg-white flex items-center">
                                <i class="fas fa-chevron-right mr-2 text-xs"></i>
                                Producto
                              </a>
                            </li>
                            <li>
                              <a href="{{route('ca')}}" class="block p-2 hover:bg-white flex items-center">
                                <i class="fas fa-chevron-right mr-2 text-xs"></i>
                                Categoria
                              </a>
                            </li>
                            <li>
                                <a href="{{route('ia')}}" class="block p-2 hover:bg-white flex items-center">
                                  <i class="fas fa-chevron-right mr-2 text-xs"></i>
                                  Inventario
                                </a>
                              </li>
                          </ul>
                        </li>
                        <li class="opcion-con-desplegable">
                          <div class="flex items-center justify-between p-2 hover:bg-white">
                            <div class="flex items-center">
                              <i class="fas fa-money-bill-wave mr-2"></i>

                              <a href="{{route('ba')}}">Bitacora</a>
                            </div>
                            <i class="fas fa-chevron-down text-xs"></i>
                          </div>

                        </li>
                        <li class="opcion-con-desplegable">
                          <div class="flex items-center justify-between p-2 hover:bg-white">
                            <div class="flex items-center">
                              <i class="fas fa-chart-bar mr-2"></i>
                              <span>Reporte / Estadistica</span>
                            </div>
                            <i class="fas fa-chevron-down text-xs"></i>
                          </div>
                          <ul class="desplegable ml-4 hidden">
                            <li>
                              <a href="#" class="block p-2 hover:bg-gray-700 flex items-center">
                                <i class="fas fa-chevron-right mr-2 text-xs"></i>
                                Presupuestos
                              </a>
                            </li>
                            <li>
                              <a href="#" class="block p-2 hover:bg-gray-700 flex items-center">
                                <i class="fas fa-chevron-right mr-2 text-xs"></i>
                                Informe médico
                              </a>
                            </li>
                          </ul>
                        </li>
                        <li class="opcion-con-desplegable">
                          <div class="flex items-center justify-between p-2 hover:bg-gray-700">
                            <div class="flex items-center">
                              <i class="fas fa-file-alt mr-2"></i>
                              <span>Carrito</span>
                            </div>
                            <i class="fas fa-chevron-down text-xs"></i>
                          </div>
                          <ul class="desplegable ml-4 hidden">
                            <li>
                              <a href="{{route('carr')}}" class="block p-2 hover:bg-gray-700 flex items-center">
                                <i class="fas fa-chevron-right mr-2 text-xs"></i>
                                Firmas pendientes
                              </a>
                            </li>
                            <li>
                              <a href="#" class="block p-2 hover:bg-gray-700 flex items-center">
                                <i class="fas fa-chevron-right mr-2 text-xs"></i>
                                Documentos
                              </a>
                            </li>
                          </ul>
                        </li>
                        <!-- Agrega más enlaces para la navegación lateral -->
                      </ul>
                    </nav>
            </div>

            <!-- Área de contenido principal -->
            <div class="flex-1 p-4 w-full md:w-1/2">
                <!-- Contenedor de Gráficas -->

                    <!-- Primer contenedor -->
                    <main>
                        {{ $slot }}
                    </main>


            </div>
        </div>
    </div>

    <!-- Script para las gráficas -->
    <script>
        document.addEventListener("DOMContentLoaded", function () {
      // Obtener todas las opciones principales con desplegables
      const opcionesConDesplegable = document.querySelectorAll(".opcion-con-desplegable");

      // Agregar evento de clic a cada opción principal
      opcionesConDesplegable.forEach(function (opcion) {
        opcion.addEventListener("click", function () {
          // Obtener el desplegable asociado a la opción
          const desplegable = opcion.querySelector(".desplegable");

          // Alternar la clase "hidden" para mostrar u ocultar el desplegable
          desplegable.classList.toggle("hidden");
        });
      });
    });
    </script>
    </body>
    </html>
