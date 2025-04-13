<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    // Muestra la lista de posts con paginación
    public function index() 
    {
        return view('posts.index', [
            'posts' => Post::latest()->paginate()  // Obtiene los posts más recientes
        ]);
    }

    // Muestra el formulario para crear un nuevo post
    public function create(Post $post) 
    {
        return view('posts.create', compact('post'));  // Pasa el post a la vista
    }

    // Almacena un nuevo post en la base de datos
    public function store(Request $request) 
    {
        // Validar los campos recibidos del formulario
        $request->validate([
            'title' => 'required',  // El título es obligatorio
            'slug'  => 'required|unique:posts,slug',  // El slug debe ser único
            'body'  => 'required',  // El cuerpo del post es obligatorio
        ]);

        // Crear el nuevo post en la base de datos
        $post = $request->user()->posts()->create([
            'title' => $request->title,  // Título del post
            'slug'  => $request->slug,   // Slug del post
            'body'  => $request->body,   // Cuerpo del post
        ]);

        // Redirigir al usuario a la página de posts con un mensaje de éxito
        return redirect()->route('posts.index')->with('success', 'El post se ha guardado correctamente.');
    }

    // Muestra el formulario para editar un post existente
    public function edit(Post $post) 
    {
        return view('posts.edit', compact('post'));  // Pasa el post a la vista
    }

    // Actualiza un post existente en la base de datos
    public function update(Request $request, Post $post)
    {
        // Validar los campos recibidos del formulario
        $request->validate([
            'title' => 'required',  // El título es obligatorio
            'slug'  => 'required|unique:posts,slug,' . $post->id,  // El slug debe ser único, excepto el actual
            'body'  => 'required',  // El cuerpo del post es obligatorio
        ]);

        // Actualizar los datos del post en la base de datos
        $post->update([
            'title' => $request->title,  // Título del post
            'slug'  => $request->slug,   // Slug del post
            'body'  => $request->body,   // Cuerpo del post
        ]);

        // Redirigir al usuario a la página de edición del post con un mensaje de éxito
        return redirect()->route('posts.edit', $post)->with('success', 'El post se ha actualizado correctamente.');
    }

    // Elimina un post de la base de datos
    public function destroy(Post $post) 
    {
        $post->delete();  // Eliminar el post de la base de datos

        // Redirigir al usuario de vuelta a la página de posts con un mensaje de éxito
        return back()->with('success', 'El post se ha eliminado correctamente.');
    }
}
