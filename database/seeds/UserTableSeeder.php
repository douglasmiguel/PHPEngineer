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
            ['name'=>'Bold International', 'email'=>'bold@boldint.pt', 'password'=>'bold', ],
            ['name'=>'Landing.jobs', 'email'=>'landingjobs@landing.jobs', 'password'=>'landingjobs', ],
            ['name'=>'LeaseWeb', 'email'=>'leaseweb@leaseweb.com', 'password'=>'leaseweb', ],
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
