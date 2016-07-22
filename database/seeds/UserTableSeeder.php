<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class UserTableSeeder extends Seeder
{
    public function run()
    {
        $users = [
            ['name'=>'Douglas Miguel', 'email'=>'douglas.miguel@gmail.com', 'password'=>'wolf0703', ],
            ['name'=>'Bipin Upadhyay', 'email'=>'bipin@digined.com', 'password'=>'soda', ],
        ];
        foreach($users as $user)
        {
            DB::table('user')->insert([
                'name'          => $user['name'],
                'email'         => $user['email'],
                'password'      => bcrypt($user['password']),
                'created_at'    => Carbon::now(),
                'updated_at'    => Carbon::now(),
            ]);
        }
    }
}
