<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $latestPost = Post::latest()->paginate();
        return view('index', compact('latestPost'));
    }
}
