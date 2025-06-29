<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index() {
        
        $posts = Post::paginate(6);

        return view('posts', compact('posts'));

    }
}
