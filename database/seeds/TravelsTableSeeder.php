<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Travel;

class TravelsTableSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ( $i = 0; $i < 100; $i++ ) {
            $newTravel = new Travel();
            $newTravel->nation = $faker->city();
            $newTravel->city = $faker->country();
            $newTravel->price = $faker->numberBetween(500, 5000);
            $newTravel->partecipants = $faker->numberBetween(5, 30);
            $newTravel->date = $faker->numberBetween(2020, 2030);
            $newTravel->save();
        }
    }
}
