<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Blog\Category;
use App\Models\Blog\Author;
use App\Models\Blog\Article;
use Illuminate\Filesystem\Filesystem;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // Category::factory()->count(10)->create()->each(function (Category $category) {
        //     \App\Models\Blog\Author::factory(2)->create()->each(function (Author $author) use ($category) {
        //     \App\Models\Blog\Article::factory(10)->create(['category_id' => $category->id, 'author_id' => $author->id]);
        //     });
        // });


        // Remove all images
        $fs = new Filesystem;
        $fs->cleanDirectory('storage/app/public');


            $categories = Category::factory()->count(2)->create();
            foreach ($categories as $category) {
                $authors = Author::factory()->count(2)->create();
                foreach ($authors as $author) {
                    Article::factory()->count(15)->create(['category_id' => $category->id, 'author_id' => $author->id]);
                }
            }   

    }
}
