<?php

use Illuminate\Database\Seeder;
use App\Day;

class DayTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Day::create(['name' => 'Mon']);
        Day::create(['name' => 'Tue']);
        Day::create(['name' => 'Wed']);
        Day::create(['name' => 'Thu']);
        Day::create(['name' => 'Fri']);
        Day::create(['name' => 'Sat']);
        Day::create(['name' => 'Sun']);
        Day::create(['name' => 'Special Only Class']);


        
    }
}
