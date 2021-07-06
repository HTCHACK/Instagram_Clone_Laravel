<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\User;
use App\Follow;
use App\Unfollow;


class UserController extends Controller
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
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $followUser = User::find($id);
        $followCount = Follow::where(['user_id' => $followUser->id])->count();
        $unfollowCount = Unfollow::where(['user_id' => $followUser->id])->count();

        return view('user.show',[
            'user' => User::findorFail($id),
            'followCount'=>$followCount,
            'unfollowCount'=>$unfollowCount
        ]);
    }

    public function follow($id)
    {
        $user = Auth::user()->id;
        $follow_user = Follow::where([
            'user_id' => $user,
        ])->first();

        if(empty($follow_user->user_id))
        {
            $user_id = Auth::user()->id;
            $like = new Follow;
            $like->user_id = $user_id;
            $like->save();

            return redirect()->back();
        }
        else{
            return redirect()->back();
        }
    }

    public function unfollow($id)
    {
        $user = Auth::user()->id;
        $unfollow_user = Unfollow::where([
            'user_id' => $user,
        ])->first();

        if(empty($unfollow_user->user_id))
        {
            $user_id = Auth::user()->id;
            $like = new Unfollow;
            $like->user_id = $user_id;
            $like->save();

            return redirect()->back();
        }
        else{
            return redirect()->back();
        }
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('user.edit',['user' => Auth::user()]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {

        $user->update([
            'name'=>$request->name,
            'email'=>$request->email,
            'username'=>$request->username,
            'password'=> Hash::make($request->password),
            'photo' => $request->hasFile('photo') ? $request->file('photo')->storeAs('public/', Str::random(20) . '.' . $request->file('photo')->getClientOriginalExtension()) : $user->photo
        ]);

        return redirect()->route('home')->with('updated','Your Profile Updated Successfully');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        //
    }

}
