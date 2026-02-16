<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TestBlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Fetch first available category or create one
        $category = \App\Models\BlogCategory::first() ?? \App\Models\BlogCategory::create(['name' => 'General', 'slug' => 'general', 'status' => 1]);

        // Fetch first available tag or create one
        $tag = \App\Models\Tag::first() ?? \App\Models\Tag::create(['name' => 'Test Tag', 'slug' => 'test-tag']);

        $blog1 = \App\Models\Blog::firstOrCreate(
            ['slug' => 'test-blog-absolute-link'],
            [
                'title' => 'Test Blog With Absolute Link',
                'status' => 1,
                'published_at' => now(),
                'category_id' => $category->id,
                'author' => 'Admin', // Required field
                'content' => '
                    <p>This is a test blog post.</p>
                    <p>Here is an absolute link to <a href="https://mokshtubes.com/materials/engineering-steels">Engineering Steels</a>.</p>
                    <p>Here is a link to a product: <a href="https://mokshtubes.com/products/pipes-tubes">Pipes & Tubes</a>.</p>
                    <p>Here is another link to <a href="https://mokshtubes.com/contact-us">Contact Us</a>.</p>
                ',
                'meta_description' => 'Test Blog Meta Description',
                'cover_image' => 'assets/images/blogs/default.jpg',
            ]
        );
        $blog1->tags()->syncWithoutDetaching([$tag->id]);

        $blog2 = \App\Models\Blog::firstOrCreate(
            ['slug' => 'test-blog-prefixed-link'],
            [
                'title' => 'Test Blog With Already Prefixed Link (Should Not Change)',
                'status' => 1,
                'published_at' => now(),
                'category_id' => $category->id,
                'author' => 'Admin', // Required field
                'content' => '
                    <p>This blog tests if we double-prefix links.</p>
                    <p>Link with prefix: <a href="https://mokshtubes.com/in/materials/engineering-steels">Engineering Steels IN</a>.</p>
                    <p>Link with US prefix: <a href="https://mokshtubes.com/us/contact-us">Contact Us US</a>.</p>
                ',
                'meta_description' => 'Test Blog 2 Meta Description',
                'cover_image' => 'assets/images/blogs/default.jpg',
            ]
        );
        $blog2->tags()->syncWithoutDetaching([$tag->id]);
    }
}
