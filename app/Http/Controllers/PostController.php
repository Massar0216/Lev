<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Http\Controllers\PostController;

Route::get('/posts', [PostController::class, 'index']);

class PostController extends Controller
{
    public function index(Post $post)
    {
        return $post->get(); //$postの中身を戻り値にする。
    }
}
