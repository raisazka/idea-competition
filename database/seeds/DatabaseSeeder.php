<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.P
     *
     * @return void
     */
    public function run()
    {
        $this->call(AdminsTableSeeder::class);
    }
}
