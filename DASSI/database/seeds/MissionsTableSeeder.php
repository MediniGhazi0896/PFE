<?php

use Illuminate\Database\Seeder;

class MissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('missions')->insert([
            'created_at'=> now(),
            'updated_at'=> now(),
            'corp_id'=> 1,
            'user_id'=> 1,
            'completed'=> 0,
            'year'=>2020
        ]);  
        DB::table('missions')->insert([
            'created_at'=> now(),
            'updated_at'=> now(),
            'corp_id'=> 2,
            'user_id'=> 1,
            'completed'=> 1,
            'year'=>2020
        ]);       
    }
}
