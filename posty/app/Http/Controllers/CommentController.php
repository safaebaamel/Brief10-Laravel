<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function index(Post $post){
        $data = Post::find($post);
        $user = User::find($post);
        $comments = Comment::orderBy('created_at' , 'desc')->where('post_id' , $post->id)->get('comment');

        return view('posts.comments' ,[
            'data' => $data,
            'user' => $user,
            'comments' => $comments
        ]);
    }
    public function store( Request $request){
        $this->validate($request, [
            'comment'=> 'required'
        ]);
        Comment::create([
            'user_id' => auth()->id(),
            'post_id' => $request->id,
            'comment' => $request->comment,
        ]);
        return back();
    }
}
