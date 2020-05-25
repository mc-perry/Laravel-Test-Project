<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class PostsController
{
    public function show($post) {
        $posts = [
            'my-first-post' => 'Hello, this is my first blog post!',
            'my-second-post' => 'Now I am getting the hand of this blogging thing.',
            'my-third-post' => 'Hey, Ive almost created my own CMS!'
        ];

        if (!array_key_exists($post, $posts)) {
            abort(404, 'Sorry, that post was not found');
        }

        return view('post', [
            'post' => $posts[$post] ?? 'Nothing here yet.'
        ]);
    }
}

