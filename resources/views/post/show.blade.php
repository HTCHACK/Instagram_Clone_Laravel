@extends('layouts.app')
@section('content')

    <div class="container">
        @if (session('success'))
            <div class="alert alert-success" role="alert">
                {{ session('success') }}
            </div>
        @endif
        <div class="row">
            <div class="col-md-6">
                <div class="jumbotron" style="background-color: #efefef">
                    <ul class="list-group" style="margin-top:0.5rem">
                        @if ($post->user->id == Auth::user()->id)
                            <a href="{{ route('home') }}"
                                style="color:#000;font-size:15px;font-weight:400;text-decoration:none">
                                <li class="list-group-item"><img
                                        src="{{ asset(str_replace('public', 'storage', $post->user->photo)) }}"
                                        class="card-img-top" alt="..." style="height:40px;width:40px;border-radius:50%">
                                    Post author : {{ $post->user->username }}</li>
                            </a>
                        @else
                            <a href="{{ route('users.show', $post->user->id) }}"
                                style="color:#000;font-size:15px;font-weight:400;text-decoration:none">
                                <li class="list-group-item"><img
                                        src="{{ asset(str_replace('public', 'storage', $post->user->photo)) }}"
                                        class="card-img-top" alt="..." style="height:40px;width:40px;border-radius:50%">
                                    Post author : {{ $post->user->username }}</li>
                            </a>
                        @endif

                    </ul>
                    <img src="{{ asset(str_replace('public', 'storage', $post->photo)) }}" class="card-img-top" alt="..."
                        style="height:400px">
                    <h1 class="display-4"></h1>
                    <p style="background:#fff;padding:2rem;margin-top:-0.5rem">{{ $post->descriptions }}

                        <a href="{{ route('likes.post', $post->id) }}" style="float:right">
                            <span style="margin-left:0.2rem;margin-top:1rem"
                                class="btn btn-danger">{{ $likeCtr }} <i class="fa fa-heart"></i></span>
                        </a>
                            @foreach($post->likes as $key => $like)
                                <p>liked by user_id {{$like->user_id}}</p>
                            @endforeach
                    </p>

                </div>
            </div>
            <div class="col-md-6">
                <div class="jumbotron" style="background-color: #efefef">
                    <h4 style="font-family: sans-serif;font-weight: 600;">Comments {{ $post->comments->count() }}</h4>
                    <ul class="list-group" style="margin-top:0.5rem">
                        @foreach ($post->comments as $key => $comment)
                            @if ($comment->user == Auth::user())
                                <a href="{{ route('home') }}" style="color:#000;text-decoration:none">
                                    <li class="list-group-item"><img
                                            src="{{ asset(str_replace('public', 'storage', $comment->user->photo)) }}"
                                            class="card-img-top" alt="..." style="height:40px;width:40px;border-radius:50%">
                                        {{ $comment->user->username }} - {{ $comment->description }} : Created at :
                                        {{ $comment->user->created_at }}</li>
                                </a>
                            @else
                                <a href="{{ route('users.show', $comment->user->id) }}"
                                    style="color:#000;text-decoration:none">
                                    <li class="list-group-item"><img
                                            src="{{ asset(str_replace('public', 'storage', $comment->user->photo)) }}"
                                            class="card-img-top" alt="..." style="height:40px;width:40px;border-radius:50%">
                                        {{ $comment->user->username }} - {{ $comment->description }} : Created at :
                                        {{ $comment->user->created_at }}</li>
                                </a>
                            @endif
                        @endforeach
                        <li class="list-group-item">
                            <form method="post" action="{{ route('comments.store', $post->id) }}">
                                <div class="form-group">
                                    @csrf
                                    <input type="hidden" name="user_id">
                                    <input type="hidden" name="post_id" value="{{ $post->id }}">
                                    <label for="exampleInputEmail1">Add Comment</label>
                                    <input type="text" class="form-control" name="description" placeholder="Comment..">
                                </div>
                                <button type="submit" class="btn btn-primary">Add</button>
                            </form>
                        </li>
                    </ul>
                </div>

            </div>
        </div>
    </div>

@endsection
