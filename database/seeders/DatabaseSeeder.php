<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Kelas;
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
        \App\Models\Student::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // Kelas::create([
        //     'nama_kelas' => '10 pplg 1',
        // ]);
        // Kelas::create([
        //     'nama_kelas' => '10 pplg 2',
        // ]);
        // Kelas::create([
        //     'nama_kelas' => '11 pplg 1',
        // ]);
        // Kelas::create([
        //     'nama_kelas' => '11 pplg 2',
        // ]);

    }
}
