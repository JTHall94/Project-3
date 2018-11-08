<?php

namespace App\Http\Controllers;

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
      //The post index is contained on the welcome page.
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        //This is handled by the home page.
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $validatedData = $request->validate([
              'title' => 'required',
              'content' => 'required',
              ]);

        $post = new \App\Post;
        $post->title = $request->input('title');
        $post->content = $request->input('content');
        $post->name=\Auth::user()->name;
        $post->user_id = \Auth::id();
        $post->save();

        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      //  $post = \App\Post::find($id);
      //  return view('posts.show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       $post = \App\Post::find($id);
       return view('edit', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      $validatedData = $request->validate([
              'title' => 'required',
              'content' => 'required',
              ]);

        $post = \App\Post::find($id);
        $post->title = $request->input('title');
        $post->content = $request->input('content');
        $post->save();

        return redirect('/');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        $post = \App\Post::find($id);
        $post->delete();

        return redirect('/');
    }

    public function delete($id)
    {
        $post = \App\Post::find($id);
        return view('delete', compact('post'));

    }
}
