<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Post;

class PostController extends Controller
{
    public function index() {
        // tutti i post
        // $posts = Post::all();

        // solo quelli pubblicati
        $posts = Post::where('published', true)->get();
        return response()->json($posts);  
    }
}
