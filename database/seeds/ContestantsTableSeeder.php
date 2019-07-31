<?php

use Illuminate\Database\Seeder;

class ContestantsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('contestants')->insert([
            'name' => 'Test',
            'email' => 'test@gmail.com',
            'password' => Hash::make('123')
        ]);
    }
}
