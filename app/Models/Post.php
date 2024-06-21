<?php

namespace App\Models;

use Illuminate\Support\Arr;

class Post
{
    public static function all()
    {
        return [
            [
                'id' => '1',
                'slug' => 'waduh',
                'title' => 'Waduh',
                'author' => 'Aditya',
                'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro fugit et amet blanditiis, ipsum consequatur, quis aperiam totam vel iure delectus dolore ab quas officiis quod dicta rerum iste eaque?',
                'published_at' => '2024-06-21',
            ],
            [
                'id' => '2',
                'slug' => 'waduh-2',
                'title' => 'Waduh 2',
                'author' => 'Aditya',
                'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro fugit et amet blanditiis, ipsum consequatur, quis aperiam totam vel iure delectus dolore ab quas officiis quod dicta rerum iste eaque?',
                'published_at' => '2024-06-21',
            ]
        ];
    }

    public static function find($slug): array
    {
        $post = Arr::first(static::all(), fn($post) => $post['slug'] == $slug);

        if (!$post) {
            abort(404, 'Post not found');
        }

        return $post;
    }
}