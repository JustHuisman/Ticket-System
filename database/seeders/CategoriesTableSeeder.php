<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categories')->insert([
            'title'         => 'Server-related Questions',
            'created_at'    => now(),
        ]);

        DB::table('categories')->insert([
            'title'         => 'New employee Questions',
            'created_at'    => now(),
        ]);

        DB::table('categories')->insert([
            'title'         => 'Change requests',
            'created_at'    => now(),
        ]);

        DB::table('categories')->insert([
            'title'         => 'Hardware',
            'created_at'    => now(),
        ]);

        DB::table('categories')->insert([
            'title'         => 'Software',
            'created_at'    => now(),
        ]);

        DB::table('categories')->insert([
            'title'         => 'Networking',
            'created_at'    => now(),
        ]);
    }
}
