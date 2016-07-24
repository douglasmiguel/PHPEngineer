<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class TechnologyTableSeeder extends Seeder
{
    public function run()
    {
        $technologies = ['HTML', 'CSS', 'JavaScript', 'jQuery', 'PHP', 'Laravel', 'SlimFramework', 'Symphony 1.4', 'TwigTemplate', 'BladeTemplate', 'MySQL', 'MongoDB', 'Apache', 'nginx', 'ElasticSearch', 'SeadragonAPI', 'Bootstrap', 'XML', 'REST', 'PSD-2-HTML', ];
        foreach($technologies as $technology)
        {
            DB::table('technology')->insert([
                'technology' => $technology,
                'created_at'    => Carbon::now(),
                'updated_at'    => Carbon::now(),
            ]);
        }
    }
}
