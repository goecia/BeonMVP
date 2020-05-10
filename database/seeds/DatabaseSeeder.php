<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersSeeder::class);
        $this->call(AudioSeeder::class);
        $this->call(BeonsLabSeeder::class);
        $this->call(BeonsPublishedSeeder::class);
        $this->call(UsersBeonsSeeder::class);
        $this->call(BlogEntriesSeeder::class);
    }
}
