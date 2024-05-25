<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::with('user')->get();
        return response()->json($posts);
    }

    public function store(Request $request)
    {
        
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'body' => 'required|string',
            'user_id' => 'required|exists:users,id',
        ]);

        
        $post = Post::create([
            'title' => $validatedData['title'],
            'body' => $validatedData['body'],
            'user_id' => $validatedData['user_id'],
        ]);

        
        return response()->json(['post' => $post, 'message' => 'Post created successfully'], 201);
    }
}
