<?php

namespace Database\Seeders;

use App\Models\Story;
use App\Models\Issue;
use Illuminate\Database\Seeder;

class StorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'issue_id' => Issue::where('name', 'A+X #1')->first()->id,
                'name' => 'Captain America + Cable/Fight for the Future',
                'order' => 1,
            ],
            [
                'issue_id' => Issue::where('name', 'A+X #1')->first()->id,
                'name' => 'The Incredible Hulk + Wolverine',
                'order' => 2,
            ],
            [
                'issue_id' => Issue::where('name', 'A+X #2')->first()->id,
                'name' => 'Black Widow + Rogue',
                'order' => 1,
            ],
            [
                'issue_id' => Issue::where('name', 'A+X #2')->first()->id,
                'name' => 'Iron Man + Kitty Pryde',
                'order' => 2,
            ],
            [
                'issue_id' => Issue::where('name', 'A+X #3')->first()->id,
                'name' => 'Black Panther + Storm',
                'order' => 1,
            ],
            [
                'issue_id' => Issue::where('name', 'A+X #3')->first()->id,
                'name' => 'Hawkeye + Gambit',
                'order' => 2,
            ],
        ];
        
        foreach($data as $d) {
            Story::create($d);
        }
    }
}
