<?php

namespace Database\Seeders;

use App\Models\User; // Import the User model
use App\Models\Category;
use App\Models\Blog;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
       
Blog::factory(12)->create();
       
    }
}
