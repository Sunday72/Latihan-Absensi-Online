<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use App\Models\Student;
use App\Models\Schedule;
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
        // \App\Models\User::factory()->create([
            //     'name' => 'Test User',
            //     'email' => 'test@example.com',
            // ]);
        
        Student::factory(20)->create();

        Schedule::create([
            'jam_masuk' => '08:00',
            'jam_keluar' => '16:00'
        ]);

        Schedule::create([
            'jam_masuk' => '09:00',
            'jam_keluar' => '17:00'
        ]);
    }
}
