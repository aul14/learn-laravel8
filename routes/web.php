<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home', [
        'title' => 'Home'
    ]);
});

Route::get('/about', function () {
    return view('about', [
        'title' => 'About',
        'name'  => 'Aul Rahman',
        'email' => 'auldoang17@gmail.com',
        'image' => 'default.jpg'
    ]);
});



Route::get('/blog', function () {
    $blog_posts = [
        [
            'title' => 'Judul Post Pertama',
            'slug'  => 'judul-post-pertama',
            'author' => 'Aul',
            'body' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quam, quis est modi consequuntur dolore beatae eos voluptas animi mollitia ut ab, repellat dicta architecto molestiae veritatis eveniet nobis cum, doloribus odio. Vero sapiente necessitatibus nobis eligendi debitis corporis vitae sint reiciendis, aliquam, aperiam quas illum dicta nemo placeat excepturi voluptates unde ullam dolorum impedit incidunt aspernatur velit quod explicabo! Reiciendis et animi provident quasi ea quisquam nostrum rem fugit quas velit reprehenderit culpa a, nam quis quod alias ex accusantium.',
        ],
        [
            'title' => 'Judul Post Kedua',
            'slug'  => 'judul-post-kedua',
            'author' => 'Rahman',
            'body' => '    Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus accusamus quibusdam cupiditate, magnam numquam
            aperiam corrupti dicta officiis quam suscipit consequuntur repellat dolor nesciunt qui reiciendis fuga illum ullam
            iste, dolorum ab. Reiciendis deleniti deserunt velit alias placeat eos possimus dolorum. Porro deleniti architecto
            molestiae possimus inventore magni maxime sapiente corrupti adipisci, consectetur repellendus tempore quasi, sint,
            molestias officia. Veniam itaque ex molestiae adipisci odio! Sit, illum consectetur. Ullam labore, numquam
            cupiditate, enim quasi aliquid dicta iure excepturi assumenda non amet quae corrupti. Commodi error nisi optio atque
            sapiente quis facilis veniam facere porro eaque voluptatem, inventore illo laudantium assumenda?',
        ],
    ];

    return view('posts', [
        'title' => 'Blog',
        'posts' => $blog_posts
    ]);
});

// Halaman single post
Route::get('/posts/{slug}', function ($slug) {
    $blog_posts = [
        [
            'title' => 'Judul Post Pertama',
            'slug'  => 'judul-post-pertama',
            'author' => 'Aul',
            'body' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quam, quis est modi consequuntur dolore beatae eos voluptas animi mollitia ut ab, repellat dicta architecto molestiae veritatis eveniet nobis cum, doloribus odio. Vero sapiente necessitatibus nobis eligendi debitis corporis vitae sint reiciendis, aliquam, aperiam quas illum dicta nemo placeat excepturi voluptates unde ullam dolorum impedit incidunt aspernatur velit quod explicabo! Reiciendis et animi provident quasi ea quisquam nostrum rem fugit quas velit reprehenderit culpa a, nam quis quod alias ex accusantium.',
        ],
        [
            'title' => 'Judul Post Kedua',
            'slug'  => 'judul-post-kedua',
            'author' => 'Rahman',
            'body' => '    Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus accusamus quibusdam cupiditate, magnam numquam
            aperiam corrupti dicta officiis quam suscipit consequuntur repellat dolor nesciunt qui reiciendis fuga illum ullam
            iste, dolorum ab. Reiciendis deleniti deserunt velit alias placeat eos possimus dolorum. Porro deleniti architecto
            molestiae possimus inventore magni maxime sapiente corrupti adipisci, consectetur repellendus tempore quasi, sint,
            molestias officia. Veniam itaque ex molestiae adipisci odio! Sit, illum consectetur. Ullam labore, numquam
            cupiditate, enim quasi aliquid dicta iure excepturi assumenda non amet quae corrupti. Commodi error nisi optio atque
            sapiente quis facilis veniam facere porro eaque voluptatem, inventore illo laudantium assumenda?',
        ],
    ];
    $new_post = [];
    foreach ($blog_posts as $key => $post) {
        if ($post["slug"] == $slug) {
            $new_post = $post;
        }
    }
    return view('post', [
        'title' => 'Single Post',
        'post'  => $new_post
    ]);
});
