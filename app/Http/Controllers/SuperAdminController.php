<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class SuperAdminController extends Controller
{
    public function index(){
        return view('superAdmin.index');
    }

    //POST AREA
    public function posts(){
        $post = Post::latest()->get();
        return view('superAdmin.posts.index', compact('post'));
    }

    public function delete(Post $post){
        $this->authorize('show', $post);
        
        $body = $post->body;
  
        $dom = new \DomDocument();
  
        @$dom->loadHtml($body, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);    
  
        $images = $dom->getElementsByTagName('img');

        foreach ($images as $img){
            $data = $img->getAttribute('src');

            $image_path = public_path($data);

            unlink($image_path);
        }

        $post->delete();
        return back();
    }

    //Author Area
    public function author(){
        $author = User::latest()->get();
        return view('superAdmin.author.index', compact('author'));
    }

    public function edit(User $user){
        return view('superAdmin.author.edit', compact('user'));
    }

    public function updateAuthor(User $user){
        $attr['name'] = request('name');
        $attr['nim'] = request('nim');
        $attr['kelas'] = request('kelas');

        $user->update($attr);

        return back();
    }
    public function updatePassword(Request $request, User $user){

        $request->validate([
            'password' => ['required', 'string', 'min:8'],
        ]);
        
        $user->update([
            'password' => Hash::make($request['password']),
        ]);

        return back();
    }
}
