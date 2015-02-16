<?php

class UserTableSeeder extends Seeder
{

  public function run()
  {

      DB::table('users')->delete();

     User::create(array(

        'username' => 'almatrudia',
        'first_name' => 'Alamin',
        'last_name' => 'Almatrudi',
        'email' => 'almatrudia@msoe.edu',
        'password' => Hash::make('password')
    ));

  }
}