<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('users')->insert([
            'name' => 'Nanda Sitepu',
            'email' => 'nanda.sitepu@gmail.com',
            'password' => bcrypt('nanda12286')
        ]);

      $faker = Faker\Factory::create();

      foreach(range(2,10) as $index)
      {
          User::create([
              'name' => $faker->userName,
              'email' =>$faker->email,
              'password' =>bcrypt('secret')
          ]);
      }
    }
}
