@extends('layouts.app')

@section('content')


    <div class="container">

        <div class="row justify-content-center">
            <div class="col-md-8">
                <form method="post" action="{{ route('users.update', Auth::user()->id) }}" enctype="multipart/form-data">
                    @csrf
                    @method('put')
                    <div class="form-group">
                        <input type="text" class="form-control" name="name" value="{{ Auth::user()->name }}">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="username" value="{{ Auth::user()->username }}">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="password" placeholder="Update Password">
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control" name="email" value="{{ Auth::user()->email }}">
                    </div>
                    <div class="form-group">
                        <img width="100px" src="{{ asset(str_replace('public', 'storage', Auth::user()->photo)) }}" alt="">
                        <label for="exampleFormControlFile1">Upload Img</label>
                        <input type="file" name="photo" class="form-control-file" id="exampleFormControlFile1" required>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-success">Update</button>
                        <a href="{{route('home')}}" class="btn btn-info">Back</a>
                    </div>
                </form>
            </div>
        </div>

    </div>


@endsection
