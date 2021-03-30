<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){
        $author = User::get();
        $post = Post::with('user')->latest()->paginate(10);
        return view('user.posts.index', compact('post', 'author'));
    }
    public function show(Post $post){
        return view('user.posts.show', compact('post'));
    }
}
