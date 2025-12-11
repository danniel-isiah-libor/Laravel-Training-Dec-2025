<?php

namespace App\Http\Controllers;

use App\Models\Post;
<<<<<<< HEAD
use App\Http\Requests\StorePostRequest;
use App\Http\Requests\UpdatePostRequest;
=======
use Illuminate\Http\Request;
>>>>>>> 910b9517e79d88702b2a2abf97d9d92068540c19

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
<<<<<<< HEAD
        //
=======
        $posts = Post::all();

        return view('posts.index', ['posts' => $posts]);
>>>>>>> 910b9517e79d88702b2a2abf97d9d92068540c19
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
<<<<<<< HEAD
        //
=======
        return view('posts.create');
>>>>>>> 910b9517e79d88702b2a2abf97d9d92068540c19
    }

    /**
     * Store a newly created resource in storage.
     */
<<<<<<< HEAD
    public function store(StorePostRequest $request)
=======
    public function store(Request $request)
>>>>>>> 910b9517e79d88702b2a2abf97d9d92068540c19
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
<<<<<<< HEAD
        //
=======
        return view('posts.show', ['post' => $post]);
>>>>>>> 910b9517e79d88702b2a2abf97d9d92068540c19
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
<<<<<<< HEAD
        //
=======
        return view('posts.edit', ['post' => $post]);
>>>>>>> 910b9517e79d88702b2a2abf97d9d92068540c19
    }

    /**
     * Update the specified resource in storage.
     */
<<<<<<< HEAD
    public function update(UpdatePostRequest $request, Post $post)
=======
    public function update(Request $request, Post $post)
>>>>>>> 910b9517e79d88702b2a2abf97d9d92068540c19
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        //
    }
}
