<?php

namespace Database\Seeders;

use App\Models\Title;
use Illuminate\Database\Seeder;

class TitleSeeder extends Seeder
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
                'name' => "A+X",
                'description' => "In the aftermath of Avengers vs. X-Men, this comic book title follows team-ups between members of the two teams working together to strengthen unity once again.",
                'volume' => 1,
                'category' => 'Limited Series',
                'from' => '2012-10-01',
                'to' => '2014-03-01',
            ],
            [
                'name' => "Years of Future Past",
                'description' => "Alternate storyline set in the Secret Wars crossover.",
                'volume' => 1,
                'category' => 'Limited Series',
                'from' => '2015-08-01',
                'to' => '2015-11-01',
            ],
        ];
        
        foreach($data as $d) {
            Title::create($d);
        }
    }
}
