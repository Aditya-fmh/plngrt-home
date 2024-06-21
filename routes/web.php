<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['title' => 'Homepage']);
});

Route::get('/about', function () {
    return view('about', ['title' => 'About']);
});

Route::get('/posts', function () {
    return view('posts', ['title' => 'Blog', 'posts' => [
        [
            'id' => '1',
            'title' => 'Waduh',
            'author' => 'Aditya',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro fugit et amet blanditiis, ipsum consequatur, quis aperiam totam vel iure delectus dolore ab quas officiis quod dicta rerum iste eaque?',
            'published_at' => '2024-06-21',
        ],
        [
            'id' => '2',
            'title' => 'Waduh 2',
            'author' => 'Aditya',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro fugit et amet blanditiis, ipsum consequatur, quis aperiam totam vel iure delectus dolore ab quas officiis quod dicta rerum iste eaque?',
            'published_at' => '2024-06-21',
        ]
    ]]);
});

Route::get('/posts/{id}', function ($id) {
    $posts = [
        [
            'id' => 1,
            'title' => 'Waduh',
            'author' => 'Aditya',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro fugit et amet blanditiis, ipsum consequatur, quis aperiam totam vel iure delectus dolore ab quas officiis quod dicta rerum iste eaque?',
            'published_at' => '2024-05-21',
        ],
        [
            'id' => 2,
            'title' => 'Waduh 2',
            'author' => 'Aditya',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro fugit et amet blanditiis, ipsum consequatur, quis aperiam totam vel iure delectus dolore ab quas officiis quod dicta rerum iste eaque?',
            'published_at' => '2024-06-21',
        ]
    ];

    $post = Arr::first($posts, function ($post) use ($id) {
        return $post['id'] == $id;
    });

    return view('post', ['title' => 'Single Post', 'post' => $post]);
    
});



Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact']);
});