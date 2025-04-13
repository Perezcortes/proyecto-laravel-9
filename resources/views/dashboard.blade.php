<x-app-layout>
    <!-- Sección del encabezado del layout -->
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <!-- Contenedor principal del contenido de la página -->
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <!-- Contenedor de la tarjeta con sombra y bordes redondeados -->
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <!-- Sección de contenido dentro de la tarjeta -->
                <div class="p-6 bg-white border-b border-gray-200">
                    <!-- Mensaje que indica que el usuario está logueado -->
                    You're logged in!
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
