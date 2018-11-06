<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class MainController extends Controller
{
  /**
  * Handle the incoming request.
  *
  * @param  \Illuminate\Http\Request  $request
  * @return \Illuminate\Http\Response
  */
 public function __invoke(Request $request)
 {
     $posts = Post::all()->sortByDesc('updated_at');
     return view('welcome', compact('posts'));
 }
}
