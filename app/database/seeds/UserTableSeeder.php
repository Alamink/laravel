<?php

class UserTableSeeder extends Seeder
{

  public function run()
  {

      DB::table('users')->delete();

     User::create(array(

        'username' => 'alamatrudi',
        'first_name' => 'Alamin',
        'last_name' => 'Almatrudi',
        'email' => 'alamatrudia@msoe.edu',
        'password' => 'password'

    ));


    $faker = Faker\Factory::create();

    for ($i = 0; $i < 100; $i++) {
      User::create(array(
          'username' => $faker->userName,
          'first_name' => $faker->firstName,
          'last_name' => $faker->lastName,
          'email' => $faker->email,
          'password' => $faker->word
      ));
    }

  }
}