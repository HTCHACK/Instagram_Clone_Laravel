@extends('layouts.app')

@section('content')


    <div class="container" style="margin:auto;">

        <div class="row">
            <div class="col-md-8" style="padding-right:2rem">
                <div class="row">
                    @foreach ($posts as $key => $post)
                        <div class="col-md-12" style="padding-top:2rem">
                            <div class="card-deck">
                                <div class="card">

                                    <ul class="list-group" style="margin-top:0.5rem">
                                        @if ($post->user == Auth::user())
                                            <a href="{{ route('home') }}"
                                                style="color:#000;text-decoration:none;font-weight:bold">
                                                <li class="list-group-item"><img
                                                        src="{{ asset(str_replace('public', 'storage', $post->user->photo)) }}"
                                                        class="card-img-top" alt="..."
                                                        style="height:40px;width:40px;border-radius:50%">
                                                    {{ $post->user->username }}</li>
                                            </a>
                                        @else
                                            <a style="color:#000;text-decoration:none;font-weight:bold"
                                                href="{{ route('users.show', $post->user->id) }}">
                                                <li class="list-group-item"><img
                                                        src="{{ asset(str_replace('public', 'storage', $post->user->photo)) }}"
                                                        class="card-img-top" alt="..."
                                                        style="height:40px;width:40px;border-radius:50%">
                                                    {{ $post->user->username }}</li>
                                            </a>
                                        @endif
                                    </ul>
                                    <a href="{{ route('posts.show', $post->id) }}"><img
                                            src="{{ asset(str_replace('public', 'storage', $post->photo)) }}"
                                            class="card-img-top" alt="..." style="height:360px"></a>
                                    <div class="card-body">
                                        <a style="color:#000;text-decoration:none"
                                            href="{{ route('posts.show', $post->id) }}">
                                            <p class="card-text">{{ Str::limit($post->descriptions, 100) }}..-
                                                {{ $post->created_at }} </p>
                                        </a>

                                        <!----Likes Count-->
                                        {{-- <a href="{{ route('likes.post', $post->id) }}" style="float:right">
                                            <span style="margin-left:0.2rem;margin-top:1rem"
                                                class="btn btn-danger">{{ $likeCtr }} <i class="fa fa-heart"></i></span>
                                        </a> --}}
                                        <!----Likes Count-->

                                        <a href="{{ route('posts.show', $post->id) }}">
                                            <span style="margin-left:0.2rem;margin-top:1rem" class="btn btn-info"><i
                                                    class="fas fa-comments"></i> {{ $post->comments->count() }}</span>
                                        </a>

                                        <ul class="list-group" style="margin-top:0.5rem">
                                            @foreach ($post->comments->take(2) as $key => $comment)
                                                <li class="list-group-item"><img
                                                        src="{{ asset(str_replace('public', 'storage', $comment->user->photo)) }}"
                                                        class="card-img-top" alt="..."
                                                        style="height:40px;width:40px;border-radius:50%">
                                                    {{ $comment->user->username }} - {{ $comment->description }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="col-md-4" style="padding-left:2rem">
                <ul class="list-group">
                    <li class="list-group-item active">Instagram Users</li>
                    @foreach ($users as $key => $user)
                        @if ($user == Auth::user())
                            <li class="list-group-item"><img width="50px" height="50px" style="border-radius:50%"
                                    src="{{ asset(str_replace('public', 'storage', $user->photo)) }}" alt="">
                                {{ $user->name }}<button style="margin-left:0.2rem"
                                    class="btn btn-warning">Follow</button><a href="{{ route('home') }}"
                                    style="margin-left:0.2rem" class="btn btn-info">View</a></li>
                        @else
                            <li class="list-group-item"><img width="50px" height="50px" style="border-radius:50%"
                                    src="{{ asset(str_replace('public', 'storage', $user->photo)) }}" alt="">
                                {{ $user->name }}<button style="margin-left:0.2rem"
                                    class="btn btn-warning">Follow</button><a href="{{ route('users.show', $user->id) }}"
                                    style="margin-left:0.2rem" class="btn btn-info">View</a></li>
                        @endif
                    @endforeach
                </ul>
            </div>
        </div>

    </div>


@endsection
@section('js')

    {{-- <script>
        $(document).on('click', '#saveLikeDislike', function() {
            var _post = $(this).data('post');
            var _type = $(this).data('type');
            var vm = $(this);
            // Run Ajax
            $.ajax({
                url: "{{ url('save-likedislike') }}",
                type: "post",
                dataType: 'json',
                data: {
                    post: _post,
                    type: _type,
                    _token: "{{ csrf_token() }}"
                },
                beforeSend: function() {
                    vm.addClass('disabled');
                },
                success: function(res) {
                    if (res.bool == true) {
                        vm.removeClass('disabled').addClass('active');
                        vm.removeAttr('id');
                        var _prevCount = $("." + _type + "-count").text();
                        _prevCount++;
                        $("." + _type + "-count").text(_prevCount);
                    }
                }
            });
        });
    </script> --}}


@endsection
