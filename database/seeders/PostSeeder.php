<?php

namespace Database\Seeders;

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
        \DB::table('posts')->truncate();
        \DB::table('posts')->insert([
            'slug' => 'my-first-post',
            'title' => 'Joe',
            'body' => 'Oh, hello there.'
        ]);
        \DB::table('posts')->insert([
            'slug' => 'my-second-post',
            'title' => 'Jane',
            'body' => 'Oh, hello there.'
        ]);
    }
}
