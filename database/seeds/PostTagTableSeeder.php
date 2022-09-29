<?php

use Illuminate\Database\Seeder;
use App\Models\post;
use App\Models\Tag;

class PostTagTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $posts = Post::all();
        

        foreach ($posts as $post) {

            $randomTags = Tag::inRandomOrder()->limit(3)->get();
            foreach ($randomTags as $tag) {
                $post->tags()->attach($tag->id);
            }
          
        }
    }
}
