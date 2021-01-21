<?php

use Illuminate\Database\Seeder;
use App\Level;


class LevelTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Level::create(['name' => 'N1']);
        Level::create(['name' => 'N2']);
        Level::create(['name' => 'N3']);
        Level::create(['name' => 'N4']);
        Level::create(['name' => 'N5']);


        
    }
}
