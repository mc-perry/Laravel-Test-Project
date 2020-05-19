<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function show($post) {
        $posts = [
            'my-first-post' => 'Hello, this is my first blog post!',
            'my-second-post' => 'Now I am getting the hand of this blogging thing.',
            'my-third-post' => 'Hey, Ive almost created my own CMS!'
        ];

        if (!array_key_exists($post, $posts)) {
            abort(404, 'Sorry, that post was not foudn');
        }

        return view('post', [
            'post' => $posts[$post] ?? 'Nothing here yet.'
        ]);
    }
}
