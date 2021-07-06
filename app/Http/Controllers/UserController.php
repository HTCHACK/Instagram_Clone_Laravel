<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\LikeDislike;
use App\Follow;
use App\User;




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
        return view('user.show', [
            'user' => User::findorFail($id),
        ]);
    }

    public function follow($id)
    {
        $user = Auth::user()->id;
        $follow_user = Follow::where(['auth_user_id' => $user,'user_id' => $id])->first();

        if (empty($follow_user->auth_user_id)) {
            $auth_user_id = Auth::user()->id;
            $user_id = $id;
            $follow = new Follow;
            $follow->auth_user_id = $auth_user_id;
            $follow->user_id = $user_id;
            $follow->save();

            return redirect()->back()->with('followers','You have successfully follow this user');
        } else {
            return redirect()->back()->with('follow','You have already follow this user, you can not follow twice');
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
        return view('user.edit', ['user' => Auth::user()]);
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
            'name' => $request->name,
            'email' => $request->email,
            'username' => $request->username,
            'password' => Hash::make($request->password),
            'photo' => $request->hasFile('photo') ? $request->file('photo')->storeAs('public/', Str::random(20) . '.' . $request->file('photo')->getClientOriginalExtension()) : $user->photo
        ]);

        return redirect()->route('home')->with('updated', 'Your Profile Updated Successfully');
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
