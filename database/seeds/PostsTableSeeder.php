<?php

use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
  $jacob = \App\User::where('name', 'Jacob')->first();
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $post = new \App\Post;
      $post->name = $jacob->name . ' The Problem with America';
      $post->content= 'The problem with America is packs of wild dogs controlling most of our major cities.'
      $post->user_id = $jacob->id;
      $post->save();
    }
}
