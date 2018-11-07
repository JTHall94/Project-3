<?php

use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

      $jacob = \App\User::where('name', 'Jacob')->first();


      $post = new \App\Post;
      $post->name = $jacob->name;
      $post->title = 'Problems';
      $post->content= 'The problem with America is packs of wild dogs controlling most of our major cities.';
      $post->user_id = $jacob->id;
      $post->save();
    }
}
