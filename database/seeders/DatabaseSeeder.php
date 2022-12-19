<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;
use App\Models\User;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        User::create([
            'name' => 'Dikz',
            'email' => 'DKZ@gmail.com',
            'username' => 'ganteng',
            'password' => bcrypt('sepakbola')
        ]);
        Category::create([
            'name' => 'FPS',
            'slug' => 'fps'

        ]);

        Category::create([
            'name' => 'Action',
            'slug' => 'action'

        ]);


        Category::create([
            'name' => 'Adventure',
            'slug' => 'adventure'

        ]);


        Category::create([
            'name' => 'Shooter',
            'slug' => 'shooter'

        ]);


        Category::create([
            'name' => 'Horror',
            'slug' => 'horror'

        ]);


        Category::create([
            'name' => 'Simulator',
            'slug' => 'simulator'

        ]);
    }
}
