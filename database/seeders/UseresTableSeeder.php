<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UseresTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([

            "name"=>'Admin',
            "role"=>'admin',
            "email"=>'admin@gmail.com',
            "password"=>bcrypt('12345'),
            
        ]);

    }
}
