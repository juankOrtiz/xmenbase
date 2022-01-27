<?php

namespace Database\Seeders;

use App\Models\Issue;
use App\Models\Title;
use Illuminate\Database\Seeder;

class IssueSeeder extends Seeder
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
                'title_id' => Title::where('name', 'A+X')->first()->id,
                'name' => 'A+X #1',
                'order' => 1,
                'published_at' => '2012-10-01',
                'cover_image' => null,
            ],
            [
                'title_id' => Title::where('name', 'A+X')->first()->id,
                'name' => 'A+X #2',
                'order' => 2,
                'published_at' => '2012-11-01',
                'cover_image' => null,
            ],
            [
                'title_id' => Title::where('name', 'A+X')->first()->id,
                'name' => 'A+X #3',
                'order' => 3,
                'published_at' => '2012-12-01',
                'cover_image' => null,
            ],
        ];
        
        foreach($data as $d) {
            Issue::create($d);
        }
    }
}
