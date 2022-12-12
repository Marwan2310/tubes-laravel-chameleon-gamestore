<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Category::create([
            'name' => 'FPS',
            'slug' => 'fps'

        ]);

        Category::create([
            'name' => 'Racing',
            'slug' => 'racing'

        ]);


        Category::create([
            'name' => 'Action',
            'slug' => 'action'

        ]);
    }
}
