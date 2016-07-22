<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class ConfigTableSeeder extends Seeder
{
    public function run()
    {
        $configs = [
            'title' => 'Digined :: Douglas Miguel',
            'description' => 'Douglas Miguel - PHP Engineer Interview @ Digined',
            'admin_lte_title_1' => 'Digined',
            'admin_lte_title_2' => 'Douglas Miguel',
            'admin_lte_collapsed_1' => 'D',
            'admin_lte_collapsed_2' => 'DM',
            'charset' => 'utf-8',
            'viewport' => 'width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no',
            'author' => 'Douglas Miguel',
            'publisher' => 'Douglas Miguel',
            'base_url' => 'https://dev.digined.douglasmiguel.com.br/',
            'path_root' => '/',
            'path_favicon' => '/favicon/',
        ];
        foreach($configs as $name => $value)
        {
            DB::table('config')->insert([
                'name'          => $name,
                'value'         => $value,
                'created_at'    => Carbon::now(),
                'updated_at'    => Carbon::now(),
            ]);
        }
    }
}
