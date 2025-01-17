<?php

namespace Database\Seeders;

use App\Models\Article;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Article::create([
            'title' => 'Juara Koding',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda ut debitis impedit, praesentium quam molestias quaerat laboriosam velit blanditiis voluptates esse dolore sequi doloremque ad, maxime aperiam distinctio deleniti a.',
            'image' => 'https://teachyourkidscode.com/wp-content/uploads/2022/02/best-coding-language-for-games.jpg',
            'slug' => 'juara-coding',
            'user_id' => 1,
            'category_id' => 1,
            'created_at' => now(),
        ]);
    }
}
