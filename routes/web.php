<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Models\Post;

/*

Route::get('/posts', [PostController::class, 'index'])->name('posts.index');

Route::get('/posts/create', [PostController::class, 'create'])->name('posts.create');;

Route::post('/posts', [PostController::class, 'store'])->name('posts.store');;

Route::get('/posts/{posts}', [PostController::class, 'posts'])->name('posts.posts');;

Route::get('/posts/{posts}/edit', [PostController::class, 'edit'])->name('posts.edit');;

Route::put('/posts/{posts}', [PostController::class, 'update'])->name('posts.update');;

Route::delete('/posts/{posts}', [PostController::class, 'destroy'])->name('posts.destroy');;


Route::get('prueba', function () {
    $post = Post::find(1);

    // return $post->published_at->format('d-m-Y');
    //return $post->created_at->diffForHumans();
    dd($post->is_active);
}); */



Route::get('/', HomeController::class);
//Esto reemplaza todo el CRUD anterior
Route::resource('posts',PostController::class);
       // ->parameters(['articulos' => 'posts'])
       // ->names('posts'); // esto para que los nombres del CRUD sea este, y poder cambiar la Uri como me plazca
   // ->except(['destroy']); esto es para exceptuar metodos que no quiero agregar
   // ->only(['edit']); para agregar solo ciertos metodos a este CRUD





    /* ------Crear nuevo Post-------
    $post = new Post;

    $post->title = 'Prueba 3';
    $post->content = 'Prueba 3';


    $post->save();

    return $post;*/


    /*
    ----Actualizar Registro----
    $post = Post::where('title', 'Prueba 1')
        ->first();

    $post->content = 'Desarrollo Web';

    $post->save(); */
    /*
    ----Traer mas de un registro(listar)---
    $post = Post::all();
    $post = Post::orderBy('id','desc')->select('id','content')->get() */

   /*

   ---Para eliminar---
   $post = Post::find(1);

    $post->delete(); */
/* Route::get('/', function () {
    return view('welcome');
});

Route::get('/posts/{post}', function ($post) {
    return "Aqui se muestra post {$post}";
});

 Route::get('/posts/{post}/{category}', function ($post,$category) {
    return "Aqio se muestra post {$post} de la categoria {$category}";
});

Route::get('/posts/{post}/{category?}', function ($post,$category = null) {

    if ($category) {
        return "Aqui se muestra post {$post} de la categoria {$category}";
    }
    return "Aqui se muestra post {$post}";
}); */
