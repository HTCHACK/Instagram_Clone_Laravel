@extends('layouts.app')

@section('content')


    <div class="container">

        <div class="row justify-content-center">
            <div class="col-md-8">
                <form method="post" action="{{ route('posts.update',$post->id) }}" enctype="multipart/form-data">
                    @csrf
                    @method('put')
                    <input type="hidden" name="user_id" value="{{ $post->user_id}}">
                    <textarea type="text" name="descriptions" class="form-control" cols="3" value="{{$post->descriptions}}">{{$post->descriptions}}</textarea>
                    <div class="form-group">
                        <img width="100px" src="{{ asset(str_replace('public', 'storage', $post->photo)) }}" alt="">
                        <label for="exampleFormControlFile1">Upload Img</label>
                        <input type="file" name="photo" class="form-control-file" id="exampleFormControlFile1" required>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-info">Update</button>
                        <a href="{{route('home')}}" class="btn btn-info">Back</a>
                    </div>
                </form>
            </div>
        </div>

    </div>


@endsection
