<?php

namespace App\Http\Controllers;
use DB;
use App\Post;

class PostsController extends Controller
{
    public function show($slug) {
        $post = Post::where('slug', $slug)->firstOrFail();

        if (! $post) {
            abort(404);
        }

        return view('post', [
            'post' => $post
        ]);
    }
}
