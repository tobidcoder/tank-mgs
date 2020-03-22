<?php

use Illuminate\Database\Seeder;

class LocationTableDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Seeding Location Table 
        App\Location::create([
           'name' => 'Location 1',
           'address' => 'No. 2 Akerele estate, Lagos',
           'user_id' => '1'
        ]);

        App\Location::create([
            'name' => 'Location 2',
            'address' => 'No. 5 Akerele estate, Lagos',
            'user_id' => '2'
         ]);

         App\Location::create([
            'name' => 'Location 3',
            'address' => 'No. 6 Akerele estate, Lagos',
            'user_id' => '3'
         ]);
         App\Location::create([
            'name' => 'Location 4',
            'address' => 'No. 8 Akerele estate, Lagos',
            'user_id' => '4'
         ]);
         App\Location::create([
            'name' => 'Location 5',
            'address' => 'No. 10 Akerele estate, Lagos',
            'user_id' => '5'
         ]);

    }
}
