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
        $post = new \App\Post;
        $post->title = $request->input('posttitle');
        $post->content = $request->input('postcontent');
        $post->name=\Auth::user()->name;
        $post->user_id = \Auth::id();
        $post->save();

        $request->session()->flash('status', "A new post was added!");
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

        $post = \App\Post::find($id);
        $post->title = $request->input('posttitle');
        $post->content = $request->input('postcontent');
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

        $request->session()->flash('status', "The post was deleted.");
        return redirect('/');
    }

    public function confirmDelete($id)
    {
        //$post = \App\Post::find($id);
        //return view('Posts.confirmDelete', compact('post'));

    }
}
