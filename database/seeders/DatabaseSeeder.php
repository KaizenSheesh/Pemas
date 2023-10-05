<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

            Category::create([
                'name' => 'Kemalingan',
            ]);
            Category::create([
                'name' => 'Bencana Alam',
            ]);
            Category::create([
                'name' => 'Berita Terkini',
            ]);
            Category::create([
                'name' => 'Perlombaan',
            ]);
            Category::create([
                'name' => 'Lainnya',
            ]);
    }
}
