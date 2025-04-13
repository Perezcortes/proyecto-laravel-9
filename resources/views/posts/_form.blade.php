@csrf

<!-- Etiqueta para el campo de "Nombre" -->
<label class="uppercase text-gray-700 text-xs">Nombre</label>
<!-- Mensaje de error si hay un problema con el campo 'title' -->
<span class="text-xs text-red-600">@error('title') {{ $message }} @enderror</span>

<!-- Campo de entrada de texto para el "Nombre" -->
<input type="text" name="title" class="rounded border-gray-200 w-full mb-4"  
    value="{{ old('title', $post->title) }}"
>

<!-- Etiqueta para el campo de "Slug" -->
<label class="uppercase text-gray-700 text-xs">Slug</label>
<!-- Mensaje de error si hay un problema con el campo 'slug' -->
<span class="text-xs text-red-600">@error('slug') {{ $message }} @enderror</span>

<!-- Campo de entrada de texto para el "Slug" -->
<input type="text" name="slug" class="rounded border-gray-200 w-full mb-4"  
    value="{{ old('slug', $post->slug) }}"
>

<!-- Etiqueta para el campo de "Contenido" -->
<label class="uppercase text-gray-700 text-xs">Contenido</label>
<!-- Mensaje de error si hay un problema con el campo 'body' -->
<span class="text-xs text-red-600">@error('body') {{ $message }} @enderror</span>

<!-- Área de texto para el "Contenido" -->
<textarea name="body" class="rounded border-gray-200 w-full mb-4" rows="5">{{ old('body', $post->body) }}</textarea>

<!-- Contenedor con opciones para volver o enviar el formulario -->
<div class="flex justify-between items-center">
    <!-- Enlace para volver al listado de posts -->
    <a href="{{ route('posts.index') }}" class="text-indigo-600">Volver</a>

    <!-- Botón para enviar el formulario -->
    <input type="submit" value="Enviar" class="bg-gray-800 text-white rounded px-4 py-2">
</div>
