<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Bienvenido a mi Librería</title>
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        @vite('resources/css/app.css')
    </head>
    <body class="h-full">
        <nav class="mx-auto flex max-w-7xl items-center justify-between p-6 lg:px-8" aria-label="Global">
            <div class="flex lg:flex-1">
              <a href="#" class="-m-1.5 p-1.5">
                <span class="sr-only">Libreria Libertad</span>
                <img class="h-8 w-auto" src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=600" alt="">
              </a>
            </div>
            <div class="flex lg:hidden">
              <button type="button" class="-m-2.5 inline-flex items-center justify-center rounded-md p-2.5 text-gray-700">
                <span class="sr-only">Open main menu</span>
                <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                </svg>
              </button>
            </div>
            <div class="hidden lg:flex lg:gap-x-12">
              <div class="relative">
              </div>
            </div>
            <div class="hidden lg:flex lg:flex-1 lg:justify-end">
              <a href="{{route('wa')}}" class="text-sm font-semibold leading-6 text-gray-900">admin <span aria-hidden="true">&rarr;</span></a>
            </div>
            <div class="hidden lg:flex lg:flex-1 lg:justify-end">
                <a href="{{route('we')}}" class="text-sm font-semibold leading-6 text-gray-900">empleado <span aria-hidden="true">&rarr;</span></a>
              </div>
              <div class="hidden lg:flex lg:flex-1 lg:justify-end">
                <a href="{{route('wc')}}" class="text-sm font-semibold leading-6 text-gray-900">cliente <span aria-hidden="true">&rarr;</span></a>
              </div>
          </nav>

    </body>
</html>
