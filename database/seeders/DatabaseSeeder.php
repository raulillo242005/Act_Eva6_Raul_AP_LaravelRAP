<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\UserRAP;
use App\Models\PostRAP;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Generar 5 usuarios
        UserRAP::factory(5)->create()->each(function ($user) {
            // Por cada usuario, generar 3 posts
            PostRAP::factory(3)->create([
                'user_rap_id' => $user->id,
            ]);
        });
    }
}
