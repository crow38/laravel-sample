<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post; // Post モデルをインポート

class PostsController extends Controller
{
    /** Postモデルを表示*/
    public function index()
    {
        $posts = Post::all(); // 投稿（Poss）モデルからすべての投稿を取得

        return view('view', compact('posts')); 

    }
}
