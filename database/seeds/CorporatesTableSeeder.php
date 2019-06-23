<?php

use Illuminate\Database\Seeder;

class CorporatesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('corporates')->insert([
            'name' => 'Telkom',
            'email' => 'telkom@gmail.com',
            'password' => Hash::make('12345678'),
            'area' => 'Area 1'
        ]);

        DB::table('corporates')->insert([
            'name' => 'Tiket.com',
            'email' => 'tiketm@gmail.com',
            'password' => Hash::make('12345678'),
            'area' => 'Area 1'
        ]);

        DB::table('corporates')->insert([
            'name' => 'Go-Jek',
            'email' => 'gojek@gmail.com',
            'password' => Hash::make('12345678'),
            'area' => 'Area 2'
        ]);

        DB::table('corporates')->insert([
            'name' => 'Fave Solution',
            'email' => 'fave@gmail.com',
            'password' => Hash::make('12345678'),
            'area' => 'Area 2'
        ]);

        DB::table('corporates')->insert([
            'name' => 'Data - On',
            'email' => 'dataon@gmail.com',
            'password' => Hash::make('12345678'),
            'area' => 'Area 3'
        ]);
    }
}
