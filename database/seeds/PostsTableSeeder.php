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
      $post->title = 'Test Post';
      $post->content= 'This is the first test post, created by a seeder file.';
      $post->user_id = $jacob->id;
      $post->save();
    }
}
