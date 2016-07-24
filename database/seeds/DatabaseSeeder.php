<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call(UserTableSeeder::class);
        $this->call(ConfigTableSeeder::class);
        $this->call(TechnologyTableSeeder::class);
        $this->call(ProjectTableSeeder::class);
    }
}
