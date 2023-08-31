<?php

namespace Database\Seeders;

use App\Models\BlogPost;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class BlogPostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        BlogPost::create([
            'img' => 'uploads/blog_img/viG9D40.png',
            'alt' => 'old computer',
            'title' => 'WHY YOU NEED A WEBSITE AS A BUSINESS OWNER',
            'slug' => 'why-you-need-a-website-as-a-business-owner',
            'pg1' => 'this is pg1',
            'pg2' => 'this is pg2',
            'pg3' => 'this is pg3',
            'pg4' => 'this is pg4',
            'pg5' => 'this is pg5',
            'pg6' => 'this is pg6',
            'pg7' => 'this is pg7',
            'quote1' => 'this is quote1',
            'quote2' => 'this is quote2',
        ]);

    }
}
