<?php

use Illuminate\Database\Seeder;

class TankTableDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Seeding Tank Table
        App\Tank::create([
            'location_id' => 1,
            'tank_type_id' => 2,
            'volume' => 70,
            'tank_name' => 'Tank 1'
        ]);

        App\Tank::create([
            'location_id' => 1,
            'tank_type_id' => 2,
            'volume' => 40,
            'tank_name' => 'Tank 2'
        ]);

        App\Tank::create([
            'location_id' => 1,
            'tank_type_id' => 1,
            'volume' => 80,
            'tank_name' => 'Tank 3'
        ]);

        App\Tank::create([
            'location_id' => 2,
            'tank_type_id' => 2,
            'volume' => 75,
            'tank_name' => 'Tank 4'
        ]);

        App\Tank::create([
            'location_id' => 2,
            'tank_type_id' => 2,
            'volume' => 50,
            'tank_name' => 'Tank 5'
        ]);

        App\Tank::create([
            'location_id' => 2,
            'tank_type_id' => 1,
            'volume' => 86,
            'tank_name' => 'Tank 6'
        ]);

        App\Tank::create([
            'location_id' => 3,
            'tank_type_id' => 2,
            'volume' => 90,
            'tank_name' => 'Tank 7'
        ]);

        App\Tank::create([
            'location_id' => 3,
            'tank_type_id' => 2,
            'volume' => 88,
            'tank_name' => 'Tank 8'
        ]);

        App\Tank::create([
            'location_id' => 3,
            'tank_type_id' => 1,
            'volume' => 78,
            'tank_name' => 'Tank 9'
        ]);
        App\Tank::create([
            'location_id' => 4,
            'tank_type_id' => 2,
            'volume' => 90,
            'tank_name' => 'Tank 10'
        ]);

        App\Tank::create([
            'location_id' => 4,
            'tank_type_id' => 2,
            'volume' => 79,
            'tank_name' => 'Tank 11'
        ]);

        App\Tank::create([
            'location_id' => 4,
            'tank_type_id' => 1,
            'volume' => 69,
            'tank_name' => 'Tank 12'
        ]);
        App\Tank::create([
            'location_id' => 5,
            'tank_type_id' => 2,
            'volume' => 79,
            'tank_name' => 'Tank 13'
        ]);

        App\Tank::create([
            'location_id' => 5,
            'tank_type_id' => 2,
            'volume' => 95,
            'tank_name' => 'Tank 14'
        ]);

        App\Tank::create([
            'location_id' => 5,
            'tank_type_id' => 1,
            'volume' => 87,
            'tank_name' => 'Tank 15'
        ]);
    }
}
