<?php

namespace Database\Seeders;

use App\Models\Post;
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
        $post = [
            [
                'title' => 'hihihi',
                'author' => 'nili',
                'body' => 'sexy',
                'cover' => 'skip',
            ],
        ];
        foreach ($post as $key => $val) {
            Post::create($val);
        }
    }
}
