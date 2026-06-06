<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class MahasiswaFactory extends Factory
{
    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [

            'nama' => fake()->name(),

            'nim' => fake()->unique()->numerify('22010###'),

            'jurusan' => fake()->randomElement([
                'Teknik Informatika',
                'Sistem Informasi',
                'Manajemen',
                'Akuntansi',
                'Teknik Sipil',
                'Hukum',
                'Psikologi',
                'Kedokteran'
            ]),

            'created_at' => now(),
            'updated_at' => now(),

        ];
    }
}
