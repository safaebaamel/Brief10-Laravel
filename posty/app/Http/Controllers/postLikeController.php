<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class postLikeController extends Controller
{
    public function store(Post $post) {
        dd($post);
    }
}
