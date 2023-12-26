<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Post;


class PostController extends Controller
{
    public function index(){
        return view('blogs.blog',
    [
        'posts'=>Post::orderByDesc('published_at')->take(3)->get(),
        'categories' =>Category::withCount('posts')-> orderByDesc('posts_count')->take(5)->get()


    ]
);
    }

    public function show(Post $post)
    {
        return view(
            'blogs.show',
            [
                'post' => $post
            ]
        );
    }
}
