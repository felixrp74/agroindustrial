<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */ 
    public function run()
    {
        User::create([
            'name'=> 'fe@fe',
            'email'=> 'fe@fe',
            'password'=> bcrypt('fe@fe'),
        ]);

        User::factory(2)->create();
    }
}
