<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(CategoriesTableSeeder::class);
        $this->call(ResponsesTableSeeder::class);
        $this->call(StatusesTableSeeder::class);
        $this->call(TicketsTableSeeder::class);
        $this->call(UserTableSeeder::class);
    }
}
