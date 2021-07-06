<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\LikeDislike;
use App\User;
use App\Post;

class PostController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('post.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Post::create([
            'photo' => $request->hasFile('photo') ? $request->file('photo')->storeAs('public/', Str::random(20) . '.' . $request->file('photo')->getClientOriginalExtension()) : null,
            'descriptions' => $request->descriptions,
            'user_id' => Auth::user()->id,
        ]);

        return redirect()->route('home')->with('success', 'Post Successfully Created');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $likePost = Post::find($id);
        $likeCtr = LikeDislike::where(['post_id' => $likePost->id])->count();

        return view('post.show', [
            'post' => Post::findorFail($id),
            'likeCtr'=>$likeCtr,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('post.edit', ['post' => Post::findorFail($id)]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        Post::findorFail($post->id)->update([
            'photo' => $request->hasFile('photo') ? $request->file('photo')->storeAs('public/', Str::random(20) . '.' . $request->file('photo')->getClientOriginalExtension()) : $post->photo,
            'descriptions' => $request->descriptions,
            'user_id' => Auth::user()->id,
        ]);

        return redirect()->route('home')->with('postup', 'Post Successfully Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        Post::findorFail($post->id)->delete();

        return redirect()->route('home')->with('delete', 'Post Successfully Deleted');
    }

    public function like($id)
    {
        $user = Auth::user()->id;
        $like_user = LikeDislike::where([
            'user_id' => $user,
            'post_id' => $id
        ])->first();

        if(empty($like_user->user_id))
        {
            $user_id = Auth::user()->id;
            $post_id = $id;
            $like = new LikeDislike;
            $like->user_id = $user_id;
            $like->post_id = $post_id;
            $like->save();

            return redirect()->back();
        }
        else{
            return redirect()->back();
        }
    }
}
