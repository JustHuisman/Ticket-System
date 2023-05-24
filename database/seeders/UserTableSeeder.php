<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'first_name'    => 'Just',
            'last_name'     => 'Huisman',
            'email'         => 'just@test.nl',
            'password'      => bcrypt('Script123!'),
            'is_admin'      => TRUE,
            'created_at'    => now(),
        ]);

        DB::table('users')->insert([
            'first_name'    => 'Non-Admin',
            'last_name'     => 'User',
            'email'         => 'nonadmin@test.nl',
            'password'      => bcrypt('Script456!'),
            'created_at'    => now(),
        ]);
        
        \App\Models\User::factory(50)->create();
    }
}
