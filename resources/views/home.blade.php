@extends('layouts.app')

@section('content')
    <div class="container">
        @if (session('updated'))
            <div class="alert alert-info" role="alert">
                {{ session('updated') }}
            </div>
        @elseif(session('success'))
            <div class="alert alert-info" role="alert">
                {{ session('success') }}
            </div>
        @elseif(session('delete'))
            <div class="alert alert-danger" role="alert">
                {{ session('delete') }}
            </div>
        @elseif(session('postup'))
            <div class="alert alert-success" role="alert">
                {{ session('postup') }}
            </div>
        @endif
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header"><img width="50px" height="50px" style="border-radius:50%"
                            src="{{ asset(str_replace('public', 'storage', Auth::user()->photo)) }}" alt="">
                        {{ Auth::user()->username }}
                        <a style="float:right" href="{{ route('posts.create') }}" class="btn btn-info">Post <i
                                class="fa fa-plus"></i></a>
                        <a style="float:right;margin-right:0.2rem" href="{{ route('users.edit', Auth::user()->id) }}"
                            class="btn btn-success">Edit <i class="fa fa-user"></i></a>
                    </div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        {{ __('You are logged in!') }}
                        <p style="float:right" href="" class="btn btn-info">Following {{ Auth::user()->following->count() }} </p>
                        <p style="float:right;margin-right:0.2rem" href="" class="btn btn-success">Followers {{ Auth::user()->followers->count() }} </p>
                        <p style="float:right;margin-right:0.2rem" class="btn btn-info">Post
                            {{ Auth::user()->posts->count() }}</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-center" style="padding-top:2rem">
            @if (Auth::user()->posts->count() > 0)
                @foreach (Auth::user()->posts as $key => $post)
                    <div class="col-md-4" style="padding-top:2rem">
                        <div class="card-deck">

                            <div class="card">
                                <a href="{{route('posts.show',$post->id)}}"><img src="{{ asset(str_replace('public', 'storage', $post->photo)) }}"
                                    class="card-img-top" alt="..." style="height:230px"></a>
                                <div class="card-body">
                                    <p class="card-text">Created at : {{ $post->created_at }} <i
                                            class="fa fa-calendar"></i>
                                    </p>
                                    <a href="{{ route('likes.post', $post->id) }}" >
                                        <span style="margin-left:0.2rem;"
                                            class="btn btn-danger">{{ $post->likes->count() }} <i class="fa fa-heart"></i></span>
                                    </a>
                                    <span style="margin-left:0.2rem"
                                        class="btn btn-info">{{$post->comments->count()}}
                                        Comments</span>
                                    <a style="float:right;margin-right:0.2rem"
                                        href="{{ route('posts.edit', $post->id) }}" class="btn btn-success">Edit <i
                                            class="fa fa-edit"></i></a>
                                    <p>
                                    <form action="{{ route('posts.destroy', $post->id) }}" class="inline-flex"
                                        method="POST">
                                        @csrf
                                        @method('delete')
                                        <button onclick="return confirm('Are you sure you want to delete ?');"
                                            class="btn btn-outline-danger btn-rounded" type="submit">
                                            <i class="fa fa-trash"></i>
                                        </button>
                                    </form>
                                    </p>
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
