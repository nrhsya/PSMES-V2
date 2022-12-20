<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        // student
        \App\Models\User::factory()->create([
            'name' => 'NUR HASYA BINTI MOHD NORDIN',
            'email' => 'student@gmail.com',
            'role' => 2,
            'password' => bcrypt('student'),
        ]);

        // coordinator
        \App\Models\User::factory()->create([
            'name' => 'DANAKORN NINCAREAN A/L EH PHONE',
            'email' => 'coordinator@gmail.com',
            'role' => 1,
            'password' => bcrypt('coordinator'),
        ]);
    }
}
