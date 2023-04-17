<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'fullname' => 'Hanafi Dias Arif Dewanto',
            'username' => 'hanfi',
            'email' => 'hanafi@gmail.com',
            'no_wa' => '08978682612',
            'password' => Hash::make('123')
        ]);
    }
}
