<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class SettingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => 'Qdemy',
            'description' => 'Qdemy merupakan platform Learning Manajemen Sistem (LMS) berbasis video dari YouTube yang dikombinasikan dengan materi yang telah disusun oleh ahli dibidangnya.',
            'telp' => '+62 892 3455 1256',
            'email' => 'help@qdemy.com',
            'address' => 'Wonosobo, Jawa Tengah, Indonesia 56353',
            'open_hours' => 'Monday - Friday 9:00AM - 05:00PM',
        ];
    }
}
