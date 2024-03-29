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
        $this->call([UsersTableSeeder::class]);
        $this->call([CorpsTableSeeder::class]);
        $this->call([MissionsTableSeeder::class]);
        $this->call([ReportsSeeder::class]);
    }
}
