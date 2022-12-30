<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ReplySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Reply::factory()->create([
            'forum_id' => '1',
            'user_id' => '3',
            'reply_detail' => 'There is a rubric section you can check out in this system',
        ]);

        \App\Models\Reply::factory()->create([
            'forum_id' => '1',
            'user_id' => '4',
            'reply_detail' => 'You can refer to your Supervisor',
        ]);

        \App\Models\Reply::factory()->create([
            'forum_id' => '2',
            'user_id' => '2',
            'reply_detail' => 'Thank you :`(',
        ]);

        \App\Models\Reply::factory()->create([
            'forum_id' => '2',
            'user_id' => '5',
            'reply_detail' => 'Goodluck to you too!',
        ]);

        \App\Models\Reply::factory()->create([
            'forum_id' => '4',
            'user_id' => '4',
            'reply_detail' => 'I feel you bro',
        ]);

        \App\Models\Reply::factory()->create([
            'forum_id' => '3',
            'user_id' => '6',
            'reply_detail' => 'I think it is from end of January until early of February 2023 but I am not quite sure',
        ]);
    }
}
