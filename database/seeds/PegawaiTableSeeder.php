<?php

use Illuminate\Database\Seeder;
use App\Pegawai;

class PegawaiTableSeeder extends Seeder
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
          Pegawai::create([
            'nama'=> $faker->sentence($nbWords = 6, $variableNbWords = true),
            'nip'=> $faker->sentence($nbWords = 6, $variableNbWords = true),
            'pangkat'=> $faker->sentence($nbWords = 6, $variableNbWords = true),
            'jabatan'=> $faker->sentence($nbWords = 6, $variableNbWords = true),
            'keterangan'=> $faker->sentence($nbWords = 6, $variableNbWords = true),
          ]);
      }
    }
}
