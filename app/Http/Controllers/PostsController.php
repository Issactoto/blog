<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BlogPost;

class PostsController extends Controller
{
    //
     /**
     * Create a new controller instance.
     *
     * @return void
     */

    public function index(){
        return view('posts.index',['posts' => BlogPost::orderBy('created_at','desc')->get()]);
    }

    public function show($id){
        //abort_if(!isset($this->posts[$id]),404);
        return view('posts.show',['post'=>BlogPost::findOrFail($id)]);
    }
    public function create(){
        return view('posts.create');
    }
    public function store(Request $request){
        $request -> validate([
            'title' =>'required|min:5|max:100',
            'content' =>'required|min:10',
        ]);
        $post = new BlogPost();
        $post->title = $request->input('title');
        $post->content = $request->input('content');
        $post->save();
        $request->session()->flash('status','The blog post was created!');
        return redirect()->route('posts.show',['post' => $post->id]);
    }
}
