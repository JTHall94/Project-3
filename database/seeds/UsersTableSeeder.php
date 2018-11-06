<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $user = new \App\User;
      $user->name = 'Jacob';
      $user->email = "jacobthall94@gmail.com";
      $user->password = bcrypt('tot');
      $user->save();
    }
}
