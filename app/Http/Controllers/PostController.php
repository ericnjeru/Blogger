<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Blog;
class PostController extends Controller
{
    public function index()
    {
        $latest_post = Blog::orderBy('id', 'DESC')->take(5)->get();
        $posts = Blog::orderBy('id', 'DESC')->paginate(3);
        $data = [
            'posts' => $posts,
            'latest_posts' => $latest_post
        ];
        return view('welcome', $data);
    }
}