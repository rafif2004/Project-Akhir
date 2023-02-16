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
        \App\Models\kelas::create([
            'kelas' => '12 RPL 2',
        ]);

        \App\Models\kelas::create([
            'kelas' => '12 RPL 1',
        ]);

        \App\Models\User::create([
            'name' => 'siswa',
            'email' => 'siswa@gmail.com',
            'password' => bcrypt('123'),
            'role' => '2',
        ]);
        
        \App\Models\User::create([
        'name' => 'lukman',
        'email' => 'lukman@gmail.com',
        'password' => bcrypt('123'),
        'role' => '1',
        ]);


        \App\Models\siswa::create([
            'nama' => 'rafif',
            'absen' => '22',
            'poin' => '90',
            'id_user' => '1',
            'id_kelas' => '1'
            ]);

        \App\Models\wali_kelas::create([
            'nama_guru' => 'Lukman',
            'id_kelas' => '1',
            'id_user' => '2'
        ]);
    }
}
    