<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PasienFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nama' => $this->faker->name,
            'nohp' => $this->faker->phoneNumber(),
            'ttl' => $this->faker->date,
            'jeniskelamin' => $this->faker->randomElement(['Laki-laki', 'Perempuan']),
            'dateappointment' => $this->faker->date,
            'jenisappointment' => $this->faker->randomElement(['Swab PCR', 'Swab Antigen', 'Konsultasi Dokter']),
            'keterangan' => $this->faker->text(),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
