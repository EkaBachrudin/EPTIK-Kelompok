<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        $user = User::get();
        return view('user.index', compact('user'));
    }

    public function post(User $user){
        $author = User::get();
        $post = $user->posts()->latest()->paginate(10);
        return view('user.posts.index', compact('post', 'user', 'author'));
    }

    public function about(){
        $author = User::get();
        return view('user.about', compact('author'));
    }

    public function member(){
        $user = User::get();
        return view('user.members.index', compact('user'));
    }

    public function memberDetail(User $user){
        return view('user.members.detail', compact('user'));
    }
}
