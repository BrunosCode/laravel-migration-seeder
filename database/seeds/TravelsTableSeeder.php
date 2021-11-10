<?php

use Illuminate\Database\Seeder;
use App\Travel;

class TravelsTableSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $newTravel = new Travel();
        $newTravel->nation = "Italy";
        $newTravel->city = "Rome";
        $newTravel->price = 2000;
        $newTravel->partecipants = 20;
        $newTravel->date = 2021;
        $newTravel->save();
    }
}
