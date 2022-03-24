<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::all();
        return view('index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();
        
        $request->validate([
          "title" => "required|max:100",
          "description" => "required|max:255",
          "content" => "required|max:20000",
          "author" => "required|max:50",
        ]);

        $newPost = new Post;
        $newPost->title = $data["title"];
        $newPost->description = $data["description"];
        $newPost->content = $data["content"];
        $newPost->author = $data["author"];
        $newPost->save();

        $posts = Post::all();
        return view('index', compact('posts'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Post::find($id);
        return view('show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::find($id);
        return view('edit', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = $request->all();

        $request->validate([
            "title" => "required|max:100",
            "description" => "required|max:255",
            "content" => "required|max:20000",
            "author" => "required|max:50",
          ]);


          $newPost = Post::find($id);
          $newPost->title = $data["title"];
          $newPost->description = $data["description"];
          $newPost->content = $data["content"];
          $newPost->author = $data["author"];
          $newPost->update();

         return redirect()->route("posts.index");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::find($id);
        $post->delete();
        return redirect()->route("posts.index");
    }
}
