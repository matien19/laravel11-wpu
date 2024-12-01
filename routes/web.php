<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['title' => 'Home Page']);
});

Route::get('posts', function () {
    return view('posts', ['title' => 'Blog', 'posts' => [
        [
            'id' => 1,
            'slug' => 'judul-artikel1',
            'title' => 'Post 1',
            'author' => 'John Doe',
            'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dolores explicabo voluptas laudantium iure facilis delectus optio deserunt illo officiis enim. Facere maxime eius molestias distinctio ipsam in nesciunt eos iure.',
            
        ],
        [
            'id' => 2,
            'slug' => 'judul-artikel2',
            'title' => 'Post 2',
            'author' => 'John Doe',
            'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe nam omnis esse illo libero dolore beatae repudiandae exercitationem cupiditate, inventore nemo officia laboriosam laudantium voluptatum veritatis ullam id ad aperiam.',
            
        ]
    ]]);
});

Route::get('post/{id}', function ($slug) {
   $posts = [
        [
            'id' => 1,
            'slug' => 'judul-artikel1',
            'title' => 'Post 1',
            'author' => 'John Doe',
            'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dolores explicabo voluptas laudantium iure facilis delectus optio deserunt illo officiis enim. Facere maxime eius molestias distinctio ipsam in nesciunt eos iure.',
            
        ],
        [
            'id' => 2,
            'slug' => 'judul-artikel2',
            'title' => 'Post 2',
            'author' => 'John Doe',
            'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe nam omnis esse illo libero dolore beatae repudiandae exercitationem cupiditate, inventore nemo officia laboriosam laudantium voluptatum veritatis ullam id ad aperiam.',
            
        ]
    ];

    $post = Arr::first($posts, function ($post) use ($slug) {
        return $post['slug'] == $slug;
    });

    return view('post', ['title' => 'Blog', 'post' => $post]);
});

Route::get('contact', function () {
    return view('contact',['title' => 'Contact']);
});
