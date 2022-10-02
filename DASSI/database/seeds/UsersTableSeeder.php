<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Admin Admin',
            'email' => 'admin@material.com',
            'firstname' => 'firstname' ,
            'lastname' => 'lastname',
            'displayname' => 'display',
            'role' => 'Administrateur',
            'active' => '1',
            'deleted' => '0',
            'password' => Hash::make('secret'),
            'access_key' => 'test',
        ]);
    }
}
