<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         $this->call(UsersTableSeeder::class);
         $this->call(LocationTableDataSeeder::class);
         $this->call(Tank_TypeTableDataSeeder::class);
         $this->call(TankTableDataSeeder::class);
         $this->call(TransferTableDataSeeder::class);
         $this->call(RecordTableDataSeeder::class);
    }
}
