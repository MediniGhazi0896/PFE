<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class CorpsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0; $i < 10 ; $i++) { 
            DB::table('corps')->insert([
                'name'=> Str::random(5),
                'activity_sector'=> Str::random(5),
                'category'=> Str::random(5),
                'criticality_class'=> ($i%3)+1,
                'type'=> Str::random(5)
            ]);
        }
    }
}
