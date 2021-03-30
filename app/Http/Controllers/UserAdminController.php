<?php

namespace App\Http\Controllers;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class UserAdminController extends Controller
{
    public function index(){
        return view('userAdmin.index');
    }

    //POST AREA======================================
    public function post(){
        $post  = Post::with('user')->latest()->get();
        return view('userAdmin.post.index', compact('post'));
    }

    public function create(){
        return view('userAdmin.post.create');
    }

    public function store(Request $request){

        $this->validate($request, [
  
              'title' => 'required',
  
              'body' => 'required',
  
         ]);
  
     
        $body = $request->body;
  
        $dom = new \DomDocument();
  
        $dom->loadHtml($body, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);   
  
        $images = $dom->getElementsByTagName('img');
  
        foreach($images as $k => $img){
            $data = $img->getAttribute('src');

            $image_64 = $data; //your base64 encoded data

            $extension = explode('/', explode(':', substr($image_64, 0, strpos($image_64, ';')))[1])[1];   // .jpg .png .pdf

            $replace = substr($image_64, 0, strpos($image_64, ',')+1); 

            // find substring fro replace here eg: data:image/png;base64,

            $image = str_replace($replace, '', $image_64); 

            $image = str_replace(' ', '+', $image); 

            $imageName = time().'.'.$extension;

            $data = base64_decode($image);

            Storage::disk('google')->put($imageName.'', $data);
            $url_image = Storage::disk('google')->url($imageName.'');

            $img->removeAttribute('src');
  
            $img->setAttribute('src', $url_image);
         }
  
  
        $body = $dom->saveHTML();
  
        $summernote = new Post;
  
        $summernote->title = $request->title;
  
        $summernote->body = $body;
 
        $summernote->slug =\Str::slug($request->title."-".auth()->user()->name);
  
        auth()->user()->posts()->save($summernote);
 
        return redirect(route('user-admin.post'));
  
    }

    public function show(Post $post){
        $this->authorize('show', $post);
        return view('userAdmin.post.show', compact('post'));
    }

    public function delete(Post $post){
        $this->authorize('show', $post);
        
        $body = $post->body;
  
        // $dom = new \DomDocument();
  
        // @$dom->loadHtml($body, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);    
  
        // $images = $dom->getElementsByTagName('img');

        // foreach ($images as $img){
        //     $data = $img->getAttribute('src');

        //     $image_path = public_path($data);

        //     unlink($image_path);
        // }

        $post->delete();
        return back();
    }

    //PROFILE AREA
    public function profile(){
        return view('userAdmin.profile.index');
    }

    public function editProfile(){
        return view('userAdmin.profile.edit');
    }

    public function updateProfile(User $user){
        $attr['name'] = request('name');
        $attr['nim'] = request('nim');
        $attr['kelas'] = request('kelas');

        $user->update($attr);

        return redirect('/user-admin/profile');
    }

    public function updatePassword(Request $request, User $user){

        $request->validate([
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
        
        $user->update([
            'password' => Hash::make($request['password']),
        ]);

        return redirect('/user-admin/profile');
    }
}
