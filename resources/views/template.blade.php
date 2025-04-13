<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Proyecto web</title>

	<!-- Enlaza el archivo CSS compilado con Laravel Mix -->
	<link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
	<!-- Contenedor principal con espaciado horizontal (padding) y centrado -->
	<div class="container px-4 mx-auto">

		<!-- Encabezado de la página con elementos alineados horizontalmente -->
		<header class="flex justify-between items-center py-4">

			<!-- Contenedor para el logo y el buscador -->
			<div class="flex items-center flex-grow gap-4">
				
				<!-- Enlace al inicio con el logo -->
				<a href="{{ route('home') }}">
					<img src="{{ asset('images/logo.png') }}" class="h-12">
				</a>

				<!-- Formulario de búsqueda con método GET -->
				<form action="{{ route('home') }}" class="flex-grow" method="GET">
				    <input type="text" name="search" placeholder="Buscar" value="{{ request('search') }}" 
				    class="border border-gray-200 rounded py-2 px-4 w-1/2">
				</form>
			</div>

			<!-- Enlace condicional según si el usuario está autenticado o no -->
			@auth
			<!-- Si el usuario está autenticado, muestra el enlace al dashboard -->
			<a href="{{ route('dashboard') }}">Dashboard</a>
			@else
			<!-- Si el usuario no está autenticado, muestra el enlace de login -->
			<a href="{{ route('login') }}">Login</a>
			@endif
		</header>

		<!-- Línea decorativa con efecto de desvanecimiento en los extremos -->
		<div class="opacity-60 h-px mb-8" style="
			background: linear-gradient(to right, 
				rgba(200, 200, 200, 0) 0%,
				rgba(200, 200, 200, 1) 30%,
				rgba(200, 200, 200, 1) 70%,
				rgba(200, 200, 200, 0) 100%
			);
		"></div>

		<!-- Sección donde se cargará el contenido de otras vistas -->
		@yield('content')

		<!-- Imagen del logo al final de la página -->
		<p class="py-16">
			<img src="{{ asset('images/logo.png') }}" class="h-12 mx-auto">
		</p>
	</div>
</body>
</html>
