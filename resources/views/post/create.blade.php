@extends('layouts.app')

@section('content')


    <div class="container">

        <div class="row justify-content-center">
            <div class="col-md-8">
                <form method="post" action="{{ route('posts.store') }}" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="user_id">
                    <textarea type="text" name="descriptions" class="form-control" cols="3" placeholder="Post Description"></textarea>
                    <div class="form-group">
                        <label for="exampleFormControlFile1">Upload Img</label>
                        <input type="file" name="photo" class="form-control-file" id="exampleFormControlFile1" required>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-success">Add</button>
                        <a href="{{route('home')}}" class="btn btn-info">Back</a>
                    </div>
                </form>
            </div>
        </div>

    </div>


@endsection
