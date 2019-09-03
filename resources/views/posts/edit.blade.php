@extends('layout.master')

@section('content')
    <div class="row">
        <div class="col-md-9 offset-2">
            <h3> Edit Post Form </h3>
            <hr>
            <form action= "{{'/posts/' . $post->id}}" method="POST" role="form">
                @csrf
                @method('PUT')
                <legend> Add new Post</legend>

                <div class="form-group">
                    <label for=""></label>
                    <input type="text" class="form-control" name="name" id="name" placeholder="Input..." value="{{$post->name}}">
                </div>

                <div class="form-group">
                    <label for=""></label>
                    <img src="{{ asset('/storage/Images/' . $post->image)}}" alt="">
                    <input type="file" class="form-control" name="image" id="image" value="{{$post->image}}">
                </div>

                <div class="form-group">
                    <label for=""></label>
                    <textarea class="form-control" rows="4" name="posts" >{{$post->posts}}</textarea>
                </div>



                <button type="submit" class="btn btn-primary">Update</button>
            </form>
        </div>
    </div>
@endsection
