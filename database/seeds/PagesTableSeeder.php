<?php

use Illuminate\Database\Seeder;
use App\Models\Page;

class PagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $faker = Faker\Factory::create();

      foreach(range(1,20) as $index)
      {
          Page::create([
            'title'=> $faker->sentence($nbWords = 6, $variableNbWords = true),
            'body' => $faker->paragraph($nb = 100, $asText = false) ,
            'slug' => $faker->slug,
          ]);
      }
    }
}
