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
       $user = App\User::create([
            'name' => 'User',
            'email' => 'testemail@somthn.com',
            'password' => bcrypt('password'),
            'admin' => 1
        ]);


        App\Profile::create([
            'user_id' => $user->id,
            'avatar' => 'uploads/avatars/1.png',
            'about' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry',
            'facebook' => 'facebook.com',
            'youtube' => 'youtube.com'
        ]);


    }
}
