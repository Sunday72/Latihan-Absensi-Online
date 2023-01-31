<?php

namespace Database\Factories;

use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Student>
 */
class StudentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'id_jadwal' => mt_rand(1,2),
            'nisn' => fake()->unique()->randomNumber(5, true),
            'password' => Hash::make('123'),
            'nama' => fake()->name(),
            'jurusan' => fake()->sentence(),
            'sekolah' => 'SMKN ' . mt_rand(1,50) . ' ' . fake()->word()
        ];
    }
}
