<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePostRequest;
use App\Mail\PostCreatedMail;
use App\Models\post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class PostController extends Controller
{
    public function index() {
        $posts = post::orderBy('id','desc')->paginate(10);

        return view('posts.index', compact('posts'));
         //el compact pasa la variable a la vista con el mismo nombre de variable
    }

    public function create() {
        return view('posts.create');
    }

   // public function store(Request $request) {
    public function store(StorePostRequest $request) {
        // return $request->all();

       /*  $request->validate([
            'title' => 'required|min:5|max:100',
            'slug' => ['required', 'unique:posts'],
            'category' => 'required',
            'content' => 'required',
        ]); */

        $post = Post::create($request->all());
        // Mail::to('prueba@prueba.com')->send(new PostCreatedMail($post));

        /* $post = new Post();
        $post->title = $request->title;
        $post->slug = $request->slug;
        $post->category = $request->category;
        $post->content = $request->content; */



        return redirect()->route('posts.index');
    }

    /* public function show($post) {
        $post = post::find($post); */
        public function show(Post $post) { //En este caso Laravel reconoce que va a buscar el ID en la BD y encuentra el objeto
           // $post = post::find($post); Esto ya no hace falta por lo anterior

        return view('posts.posts', compact('post'));
        /* return view('posts.posts', [
            'posts' => $posts
        ]); */
    }

    public function edit(Post $post) {
       // $post = post::find($post);
        return view('posts.edit', compact('post'));
    }

    public function update(Request $request, Post $post) {
        //$post = post::find($post);

         $request->validate([
            'title' => 'required|min:5|max:100',
            'slug' => "required|unique:posts,slug,{$post->id}",
            'category' => 'required',
            'content' => 'required',
        ]);

      //  return $request;

        $post->update($request->all());

       /*  $post->title = $request->title;
        $post->slug = $request->slug;
        $post->category = $request->category;
        $post->content = $request->content;

        $post->save(); */

        return redirect()->route('posts.show',$post);
    }

    public function destroy(Post $post) {
        //$post = post::find($post);



        $post->delete();

        return redirect()->route('posts.index');
    }
}
