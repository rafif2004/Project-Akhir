<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        \App\Models\User::create([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('123'),
            'role' => '1',

           
        ]);
        
        \App\Models\User::create([
        'name' => 'siswa',
        'email' => 'siswa@gmail.com',
        'password' => bcrypt('123'),
        'role' => '2',
        ]);
    }
}
