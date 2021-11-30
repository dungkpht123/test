<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function blog()
    {
        $gannhat = Post::where('status',1)->limit(4)->orderBy('created_at','ASC')->get();
        $posts = Post::orderBy('created_at','DESC')->paginate(3);
        return view('user.blog',compact('posts','gannhat'));
    }
    public function blog_single($slug,$id)
    {
        // $post = Post::where('category_id',$slug->id)->where('status',1)->paginate(9);
        Post::where('id',$id)->increment('view_count');
        $view = Post::where('id',$id)->get();
        $slug = Post::where('slug',$slug)->first();
        $gannhat = Post::where('status',1)->limit(4)->orderBy('created_at','ASC')->get();
        $posts = Post::orderBy('created_at','DESC')->paginate(3);

        return view('user.blog_single',compact('view','slug','gannhat','posts'));
    }
}
