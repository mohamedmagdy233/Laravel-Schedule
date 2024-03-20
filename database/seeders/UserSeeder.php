<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{

    public function run()
    {
        User::create([
           'name'=>'Mohamed',
           'email'=>'Mohamed@gmail.com',
           'password'=>hash::make('password')

        ]);

    }
}
