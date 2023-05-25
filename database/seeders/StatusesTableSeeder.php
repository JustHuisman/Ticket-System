<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StatusesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('statuses')->insert([
            'title'         => 'New',
            'created_at'    => now(),
        ]);

        DB::table('statuses')->insert([
            'title'         => 'Assigned',
            'created_at'    => now(),
        ]);

        DB::table('statuses')->insert([
            'title'         => 'In Progress',
            'created_at'    => now(),
        ]);

        DB::table('statuses')->insert([
            'title'         => 'Pending',
            'created_at'    => now(),
        ]);

        DB::table('statuses')->insert([
            'title'         => 'Resolved',
            'created_at'    => now(),
        ]);
    }
}
