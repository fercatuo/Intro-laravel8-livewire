<?php

namespace Database\Seeders;

//Hacemos referencia a los modelos 'Invocar'
use App\Models\User;
use App\Models\Category;
use App\Models\Course;
use App\Models\Post;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(5)->create();        
        Category::factory(3)->create();        
        Course::factory(10)->create();        
        Post::factory(90)->create();        
    }
}
