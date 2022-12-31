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
        // coordinator
        \App\Models\User::factory()->create([
            'name' => 'DANAKORN NINCAREAN A/L EH PHONE',
            'email' => 'coordinator@gmail.com',
            'role' => 1,
            'password' => bcrypt('coordinator'),
        ]);

        // students
        \App\Models\User::factory()->create([
            'name' => 'NUR HASYA BINTI MOHD NORDIN',
            'email' => 'hasya@gmail.com',
            'role' => 2,
            'password' => bcrypt('hasya123'),
        ]);

        \App\Models\User::factory()->create([
            'name' => 'NUR NADIA SYAKIRAH BINTI MOHD SAUKI',
            'email' => 'nadia@gmail.com',
            'role' => 2,
            'password' => bcrypt('nadia123'),
        ]);

        \App\Models\User::factory()->create([
            'name' => 'FOONG KIN HONG',
            'email' => 'foong@gmail.com',
            'role' => 2,
            'password' => bcrypt('foong123'),
        ]);

        \App\Models\User::factory()->create([
            'name' => 'LOGADARSHAN A/L KRISHNAN',
            'email' => 'loga@gmail.com',
            'role' => 2,
            'password' => bcrypt('loga123'),
        ]);

        \App\Models\User::factory()->create([
            'name' => 'YOSHANA A/P SELVARAJ',
            'email' => 'yoshana@gmail.com',
            'role' => 2,
            'password' => bcrypt('yoshana123'),
        ]);
    }
}
