<?php

use Illuminate\Database\Seeder;

class ExpoMembersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('expo_members')->insert([
           'name' => 'Rais',
           'email' => 'raisazka@gmail.com',
           'phone' => '082129519651',
           'dob' => '2019-06-20',
           'otp' => 'AAAAAAA',
           'gender' => 'Male'  
        ]);
    }
}
