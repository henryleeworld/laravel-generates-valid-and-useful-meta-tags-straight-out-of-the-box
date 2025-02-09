<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class PostController extends Controller
{
    public function show($postId) 
    {
        $post = Post::find($postId);

        $post->seo->update([
            'title' => __('"Mobile Suit Gundam SEED"\'s latest theatrical animation "Mobile Suit Gundam SEED FREEDOM", the agent Medialink announced that it will be released in Taiwan on April 19.'),
            'image' => 'images/posts/1.jpg', // Will point to `public_path('images/posts/1.jpg')`
        ]);
        return view('post', ['post' => $post]);
    }
}
