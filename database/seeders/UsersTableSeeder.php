<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;
use Illuminate\Support\Facades\Hash;
class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert(
            //Admin
            [
                'name'=>'Akhilesh Thakur',
                'username'=>'admin',
                'email'=>'akhilesh@thakur.com',
                'password'=>Hash::make('akhilesh'),
                'role'=>'admin',
                'status'=>'active'
            ],
            //Agent
            [
                'name'=>'Sagarika',
                'username'=>'admin',
                'email'=>'sagarika@thakur.com',
                'password'=>Hash::make('akhilesh'),
                'role'=>'agent',
                'status'=>'active'
            ],
            // User
            [
                'name'=>'Ishu',
                'username'=>'admin',
                'email'=>'ishu@thakur.com',
                'password'=>Hash::make('akhilesh'),
                'role'=>'user',
                'status'=>'active'
            ],
        );
    }
}
