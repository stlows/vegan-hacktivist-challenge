<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Answer;
use App\Models\ExampleQuestion;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        ExampleQuestion::insert([
          ['value' => 'Why do humans drink cow\'s milk?'],
          ['value' => 'How many water does it take to make a hamburger?'],
          ['value' => 'How do you handle family dinner?'],
          ['value' => 'Which country has the highest vegans/100 habitants?'],
          ['value' => 'Which vegan cheese is the best to make a lasagna?'],
          ['value' => 'How to you get enough iron in a vegan diet?']
        ]);

    }
}
