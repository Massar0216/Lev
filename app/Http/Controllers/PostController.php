<?php

namespace App\Http\Controllers;

use App\Models\Post;



class PostController extends Controller
{
    public function index(Post $post)
    {
        return $post->get(); //$postの中身を戻り値にする。
    }
}
