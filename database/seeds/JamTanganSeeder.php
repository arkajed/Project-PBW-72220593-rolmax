<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class JamTanganSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        for($i=0;$i>100;$i++){DB::table('jamtangan')->insert([
            'merk' => $faker->word(),
            'model' => $faker->word(),
            'tipe' => $faker-word(),
            'warna' => $faker->word(),
        ]);}
    }
}
