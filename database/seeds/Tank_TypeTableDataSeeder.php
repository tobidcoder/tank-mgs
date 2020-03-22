<?php

use Illuminate\Database\Seeder;

class Tank_TypeTableDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Seeding Tank Type Table 
        App\Tank_Type::create([
            'name' => 'Underground Tank',
            'status' => 1
        ]);

        App\Tank_Type::create([
            'name' => 'Non Underground Tank',
            'status' =>  1
        ]);

    }
}
