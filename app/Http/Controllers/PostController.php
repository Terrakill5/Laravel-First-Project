<?php

namespace App\Http\Controllers;

use App\Models\post;
use Illuminate\Http\Request;

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

    public function store(Request $request) {
        // return $request->all();

        $post = new Post();
        $post->title = $request->title;
        $post->category = $request->category;
        $post->content = $request->content;

        $post->save();

        return redirect("/posts");
    }

    public function show($post) {
        $post = post::find($post);

        return view('posts.posts', compact('post'));
        /* return view('posts.posts', [
            'posts' => $posts
        ]); */
    }

    public function edit($post) {
        $post = post::find($post);
        return view('posts.edit', compact('post'));
    }

    public function update(Request $request, $post) {
        $post = post::find($post);

        $post->title = $request->title;
        $post->category = $request->category;
        $post->content = $request->content;

        $post->save();

        return redirect("/posts/{$post->id}");
    }

    public function destroy( $post) {
        $post = post::find($post);



        $post->delete();

        return redirect("/posts");
    }
}
