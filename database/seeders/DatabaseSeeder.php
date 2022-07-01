<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
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
        User::factory(5)->create();

        Category::create([
            'name'  => 'Web Programming',
            'slug'  => 'web-programming'
        ]);
        Category::create([
            'name'  => 'Web Design',
            'slug'  => 'web-design'
        ]);

        Post::factory(20)->create();

        // User::create([
        //     'name'   => 'Aul',
        //     'email' => 'aul@gmail.com',
        //     'password' => bcrypt('123')
        // ]);
        // User::create([
        //     'name'   => 'Shilki',
        //     'email' => 'shilki@gmail.com',
        //     'password' => bcrypt('123')
        // ]);

        // Post::create([
        //     'title'     => 'Judul Pertama',
        //     'slug'      => 'judul-pertama',
        //     'excerpt'   => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Et distinctio porro quae labore quas blanditiis asperiores iure molestias, suscipit in.',
        //     'body'      => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem repellendus nulla consequatur libero impedit temporibus voluptas culpa laboriosam inventore maiores minima sed dolorem illum fugiat a voluptatum totam, voluptatibus itaque quae aut ducimus odit? Ipsum, fugiat quia nam architecto culpa minus excepturi tenetur porro, rem cumque omnis! A ducimus harum ut error nemo, assumenda quaerat recusandae soluta, itaque illum labore maxime eum, atque vitae. Dicta illum aperiam voluptas quas, omnis voluptates ducimus soluta odio eligendi, doloribus quo sapiente ad quisquam cupiditate fuga? Quos placeat sunt quod totam id minima corporis quidem, accusantium aliquam animi ea, nisi, praesentium eius quasi sed?',
        //     'category_id'   => 1,
        //     'user_id'       => 1
        // ]);
        // Post::create([
        //     'title'     => 'Judul Kedua',
        //     'slug'      => 'judul-kedua',
        //     'excerpt'   => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Et distinctio porro quae labore quas blanditiis asperiores iure molestias, suscipit in.',
        //     'body'      => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem repellendus nulla consequatur libero impedit temporibus voluptas culpa laboriosam inventore maiores minima sed dolorem illum fugiat a voluptatum totam, voluptatibus itaque quae aut ducimus odit? Ipsum, fugiat quia nam architecto culpa minus excepturi tenetur porro, rem cumque omnis! A ducimus harum ut error nemo, assumenda quaerat recusandae soluta, itaque illum labore maxime eum, atque vitae. Dicta illum aperiam voluptas quas, omnis voluptates ducimus soluta odio eligendi, doloribus quo sapiente ad quisquam cupiditate fuga? Quos placeat sunt quod totam id minima corporis quidem, accusantium aliquam animi ea, nisi, praesentium eius quasi sed?',
        //     'category_id'   => 1,
        //     'user_id'       => 1
        // ]);
        // Post::create([
        //     'title'     => 'Judul ketiga',
        //     'slug'      => 'judul-ketiga',
        //     'excerpt'   => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Et distinctio porro quae labore quas blanditiis asperiores iure molestias, suscipit in.',
        //     'body'      => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem repellendus nulla consequatur libero impedit temporibus voluptas culpa laboriosam inventore maiores minima sed dolorem illum fugiat a voluptatum totam, voluptatibus itaque quae aut ducimus odit? Ipsum, fugiat quia nam architecto culpa minus excepturi tenetur porro, rem cumque omnis! A ducimus harum ut error nemo, assumenda quaerat recusandae soluta, itaque illum labore maxime eum, atque vitae. Dicta illum aperiam voluptas quas, omnis voluptates ducimus soluta odio eligendi, doloribus quo sapiente ad quisquam cupiditate fuga? Quos placeat sunt quod totam id minima corporis quidem, accusantium aliquam animi ea, nisi, praesentium eius quasi sed?',
        //     'category_id'   => 2,
        //     'user_id'       => 2
        // ]);

    }
}
