<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\User::factory()->create([
            'name' => 'José R. Gutierrez',
            'email' => 'josefo727@gmail.com',
        ]);

        \App\Models\User::factory(10)->create();
    }
}
