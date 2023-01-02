<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;

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


        User::create([
            'name' => 'Marwan Hakim',
            'username' => 'Marwan',
            'email' => 'marwan@gmail.com',
            'password' => bcrypt('password')


        ]);

        // User::create([
        //     'name' => 'Amos',
        //     'email' => 'amos@gmail.com',
        //     'password' => bcrypt('123123123')


        //]);

        User::factory(3)->create();

        Category::create([
            'title' => 'Action',
            'slug' => 'action'

        ]);

        Category::create([
            'title' => 'Adventure',
            'slug' => 'adventure'

        ]);

        Category::create([
            'title' => 'Shooter',
            'slug' => 'shooterl'

        ]);

        Post::factory(10)->create();
    }
}
