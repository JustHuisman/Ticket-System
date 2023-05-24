<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TicketsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('tickets')->insert([
            'title'         => 'Installation problem',
            'content'       => `Hello! I've got a problem with installing some software`,
            'created_at'    => now(),
        ]);

        DB::table('tickets')->insert([
            'title'         => 'Networking!',
            'content'       => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta magni deserunt ad odio aliquam atque provident, incidunt libero earum rem reprehenderit ipsum doloremque voluptas voluptatum quia minus, iure saepe eius.',
            'created_at'    => now(),
        ]);
    }
}
