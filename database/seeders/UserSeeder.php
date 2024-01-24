<?php

namespace Database\Seeders;

use Database\Factories\UserFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        UserFactory::new()->withPersonalTeam()->create([
            'name' => 'Maicon Mendonca',
            'email' => 'maicon@mail.com',
            'password' => bcrypt('123456')
        ]);
    }
}
