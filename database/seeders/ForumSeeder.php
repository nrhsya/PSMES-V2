<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ForumSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Forum::factory()->create([
            'user_id' => '2',
            'title' => 'PSM Rubric',
            'category' => 'PSM Rubric',
            'description' => 'Where can I get the rubric for the PSM evalution?',
        ]);

        \App\Models\Forum::factory()->create([
            'user_id' => '3',
            'title' => 'Take care',
            'category' => 'Others',
            'description' => 'Goodluck to everyone in finishing the PSM. Do not forget to take care of your health and well-being',
        ]);

        \App\Models\Forum::factory()->create([
            'user_id' => '4',
            'title' => 'Industry Evaluation Date',
            'category' => 'Industry Evaluation',
            'description' => 'Does anyone know what the date for the industry evaluation will take place?',
        ]);

        \App\Models\Forum::factory()->create([
            'user_id' => '5',
            'title' => 'Bad PSM Mark',
            'category' => 'PSM Related (General)',
            'description' => 'Why is my mark for PSM evaluation so bad?',
        ]);

        \App\Models\Forum::factory()->create([
            'user_id' => '6',
            'title' => 'Tired',
            'category' => 'Others',
            'description' => 'Is it just me or is completing PSM makes me feel exhausted. My brain is abouut to burst already',
        ]);
    }
}
