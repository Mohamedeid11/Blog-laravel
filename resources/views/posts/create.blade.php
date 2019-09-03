@extends('layout.master')

@section('content')
    <div class="row">
        <div class="col-md-9 offset-2">
            <h3> Create Post Form </h3>
            <hr>
            <form action= "{{route('posts.store')}}" method="POST" role="form"  enctype="multipart/form-data">
                    @csrf

                <legend> Add new Post</legend>

                <div class="form-group">
                    <label for=""></label>
                    <input type="text" class="form-control" name="name" id="name" placeholder="Input...">
                </div>

                <div class="form-group">
                    <label for=""></label>
                    <textarea class="form-control" rows="4" name="posts"></textarea>
                </div>

                <div class="form-group">
                    <input type="file" name="Image" id="Image" class="form-control-file">
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
    @endsection
