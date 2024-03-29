<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\Category;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(15)->create();
     
           \App\Models\Category::factory(5)->create();
                 \App\Models\Post::factory(5)->create();
    }
}
