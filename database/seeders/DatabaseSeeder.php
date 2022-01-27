<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(TitleSeeder::class);
        $this->call(IssueSeeder::class);
        $this->call(StorySeeder::class);
    }
}
