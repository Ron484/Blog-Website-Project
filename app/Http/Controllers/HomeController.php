<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use App\Models\Post; 


class HomeController extends Controller
{
    public function __invoke(Request $request){
    return view('home', [
        'featuredPosts' => \App\Models\Post::latestPublished()->take(9)->get()

    ]);
    }

}
