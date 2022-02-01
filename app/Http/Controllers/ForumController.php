<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Post;
use App\Models\Tournament;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
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
        $posts=Post::orderBy('created_at', 'DESC')->get();
        return view('forum.forum', compact('posts'));
    }

    public function welcome()
    {
        $tournaments=Tournament::take(4)->where('date','>', Carbon::now()->format('Y-m-d'))->get();
        $posts=Post::take(4)->orderBy('created_at', 'DESC')->get();
        $users=User::all();
        return view('welcome', compact('posts', 'users', 'tournaments'));
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
