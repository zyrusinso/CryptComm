<?php

namespace Database\Seeders;

use App\Models\Blog\Post;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'user_id' => 1,
                'title' => 'First Blog',
                'description' => 'First Blog',
                'like' => 4,
                'photo' => 'http://admin.pixelstrap.com/viho/assets/images/blog/blog.jpg'
            ],
            [
                'user_id' => 1,
                'title' => 'Second Blog',
                'description' => 'Second Blog',
                'like' => 4,
                'photo' => 'http://admin.pixelstrap.com/viho/assets/images/blog/blog.jpg'
            ],
            [
                'user_id' => 1,
                'title' => 'Third Blog',
                'description' => 'Third Blog',
                'like' => 4,
                'photo' => 'http://admin.pixelstrap.com/viho/assets/images/blog/blog.jpg'
            ],
            [
                'user_id' => 1,
                'title' => 'Fourth Blog',
                'description' => 'Fourth Blog',
                'like' => 4,
                'photo' => 'http://admin.pixelstrap.com/viho/assets/images/blog/blog.jpg'
            ]
        ];
        
        $chunks = collect($data);
        $chunks->each(function ($item) { Post::create($item); });
    }
}
