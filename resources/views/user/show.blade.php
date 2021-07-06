@extends('layouts.app')

@section('content')

    <div class="container">
        @if (session('follow'))
            <div class="alert alert-danger" role="alert">
                {{ session('follow') }}
            </div>
        @elseif(session('followers'))
            <div class="alert alert-success" role="alert">
                {{ session('followers') }}
            </div>
        @endif
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header"><img width="50px" height="50px" style="border-radius:50%"
                            src="{{ asset(str_replace('public', 'storage', $user->photo)) }}" alt="">
                        {{ $user->username }}
                        @foreach ($follow_user as $follow)

                            @if ($follow->auth_user_id == Auth::user()->id)
                                <a style="float:right;margin-right:0.2rem" href="{{ route('users.follow', $user->id) }}"
                                    class="btn btn-danger">Unfollow <i class="fas fa-user-minus"></i></a>
                            @endif

                        @endforeach
                        <a style="float:right;margin-right:0.2rem" href="{{ route('users.follow', $user->id) }}"
                            class="btn btn-info">Follow <i class="fas fa-user-plus"></i></a>

                        <a style="float:right;margin-right:0.2rem" href=""
                            class="btn btn-warning">{{ $user->posts->count() }} Posts</a>
                    </div>
                </div>
                <div class="card-body">

                    <a style="float:right;margin-right:0.2rem" href="" class="btn btn-info">Followers
                        {{ $user->followers->count() }} <i class="fa fa-users"></i></a>

                    <a style="float:right;margin-right:0.2rem" href="" class="btn btn-warning">Following
                        {{ $user->following->count() }} <i class="fa fa-users"></i></a>

                </div>
            </div>
        </div>
        <div class="row justify-content-center" style="padding-top:2rem">
            @if ($user->posts->count() > 0)
                @foreach ($user->posts as $key => $post)
                    <div class="col-md-4" style="padding-top:2rem">
                        <div class="card-deck">

                            <div class="card">
                                <a href="{{ route('posts.show', $post->id) }}"><img
                                        src="{{ asset(str_replace('public', 'storage', $post->photo)) }}"
                                        class="card-img-top" alt="..." style="height:230px"></a>
                                <div class="card-body">
                                    <p class="card-text">Created at : {{ $post->created_at }} <i
                                            class="fa fa-calendar"></i>
                                    </p>
                                    <a href="{{ route('likes.post', $post->id) }}">
                                        <span style="margin-left:0.2rem;"
                                            class="btn btn-danger">{{ $post->likes->count() }} <i
                                                class="fa fa-heart"></i></span>
                                    </a>
                                    <span style="margin-left:0.2rem" class="btn btn-info">{{ $post->comments->count() }}
                                        Comments</span>
                                </div>
                            </div>

                        </div>
                    </div>
                @endforeach
            @else
                <h1 style="text-align:center"><button class="btn btn-info">No Post Yet</button></h1>
            @endif
        </div>
    </div>


@endsection
