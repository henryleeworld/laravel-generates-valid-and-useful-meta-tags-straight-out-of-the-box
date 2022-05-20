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
            'title' => '新竹客運9/12後不續營34條路線，衝擊桃竹苗民眾上學上班',
            'image' => 'images/posts/1.jpg', // Will point to `public_path('images/posts/1.jpg')`
        ]);
        return view('post', ['post' => $post]);
    }
}
