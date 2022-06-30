<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post_old
{
    private static $blog_posts = [
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
            iste, dolorum ab. Reiciendis deleniti deserunt velit alias placeat eos possimus dolorum. Porro deleniti architectoa
            molestiae possimus inventore magni maxime sapiente corrupti adipisci, consectetur repellendus tempore quasi, sint,
            molestias officia. Veniam itaque ex molestiae adipisci odio! Sit, illum consectetur. Ullam labore, numquam
            cupiditate, enim quasi aliquid dicta iure excepturi assumenda non amet quae corrupti. Commodi error nisi optio atque
            sapiente quis facilis veniam facere porro eaque voluptatem, inventore illo laudantium assumenda?',
        ],
    ];

    public static function all()
    {
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
        $posts = static::all();
        // $new_post = [];
        // foreach ($posts as $key => $p) {
        //     if ($p["slug"] == $slug) {
        //         $new_post = $p;
        //     }
        // }

        return $posts->firstWhere('slug', $slug);
    }
}
