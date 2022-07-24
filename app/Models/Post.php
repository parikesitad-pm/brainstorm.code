<?php

namespace App\Models;



class Post
{
    private static $blogPosts = [
        [
            'title' => "First Post",
            'slug' => 'first-posts',
            'author' => "Dausan",
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum vero quae numquam fugit eveniet consequatur nesciunt dolore labore velit eius tenetur quos molestias voluptatem incidunt, repellat impedit modi odit iure quod, cumque nihil aliquid, ipsum veritatis quis. Qui necessitatibus commodi dolore amet quae tempora ullam itaque perspiciatis modi voluptas eligendi, exercitationem excepturi dolores error natus voluptate. Officia, quisquam nulla. Consequatur voluptate perferendis quasi quibusdam pariatur dolor fugiat hic a esse aperiam veniam officia magnam consequuntur obcaecati omnis assumenda alias, blanditiis vel, eligendi sequi repellendus iste aliquid ipsum nihil! Beatae harum ea quam eaque voluptatem eligendi atque rem iure provident similique.'
        ],
        [
            'title' => "Third Post",
            'slug' => "third-post",
            'author' => "Parikesit",
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum vero quae numquam fugit eveniet consequatur nesciunt dolore labore velit eius tenetur quos molestias voluptatem incidunt, repellat impedit modi odit iure quod, cumque nihil aliquid, ipsum veritatis quis. Qui necessitatibus commodi dolore amet quae tempora ullam itaque perspiciatis modi voluptas eligendi, exercitationem excepturi dolores error natus voluptate. Officia, quisquam nulla. Consequatur voluptate perferendis quasi quibusdam pariatur dolor fugiat hic a esse aperiam veniam officia magnam consequuntur obcaecati omnis assumenda alias, blanditiis vel, eligendi sequi repellendus iste aliquid ipsum nihil! Beatae harum ea quam eaque voluptatem eligendi atque rem iure provident similique.'
        ],
    ];

    public static function all()
    {
        return collect(self::$blogPosts);
    }

    public static function find($slug)
    {
        $posts = static::all();
        // $post = [];
        // foreach ($posts as $p) {
        //     if($p['slug'] === $slug) {
        //         $post = $p;
        //     }
        // }


        return $posts->firstWhere('slug', $slug);
    }
}
