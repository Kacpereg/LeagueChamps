<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ForumController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }
    public function storePost(Request $request)
    {
        $this->validate($request, [
            'title'=>'required',
            'text'=>'required',
        ]);
        $post= Post::create([
            'title' => $request->get('title'),
            'text' => $request->get('text'),
            'user_id' => Auth::id()
        ]);
        return $this->showPost($post);
    }

    public function showPost(Post $post)
    {
        $user=$post->getUser();
        return view('posts.show', compact('post','user'));
    }

    public function list()
    {
        $posts=Post::all();
        return view('forum.forum', compact('posts'));
    }

    public function addComment(Request $request)
    {
        $this->validate($request, [
            'text'=>'required'
        ]);

        return Comment::create([
            'text'=>$request->get('text'),
            'user_id'=> Auth::id()
        ]);
    }
}
