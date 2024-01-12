<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class PostController extends Controller
{
    public function getPostById($id)
    {
        $post = Cache::get('posts:' . $id);
        dd($post->title);
    }
}