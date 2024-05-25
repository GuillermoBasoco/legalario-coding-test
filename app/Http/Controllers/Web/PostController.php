<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{

    public function home()
    {
        $posts = Post::with('user')->get();
        return view('welcome', compact('posts'));
    }

    public function index()
    {
        $posts = Post::with('user')->get();
        return view('posts.index', compact('posts'));
    }

    public function show(Post $post)
    {
        if (auth()->check()) {
            return view('posts.show', compact('post'));
        } else {
            return view('posts.show_guest', compact('post'));
        }
    }

    public function destroy(Post $post)
    {
        $post->delete();
        return redirect()->route('posts.index')->with('status', 'Post deleted successfully');
    }
}
