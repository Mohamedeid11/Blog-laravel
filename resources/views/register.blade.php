@extends('layout.main')
@section('title', 'register')
@section('content')
    @include('layout.errormasage')
        <form action="{{route('reg')}}" method="post" enctype="multipart/form-data">
            {{csrf_field()}}
            <legend>Register</legend>

            <div class="form-group">
                <label for="username">username</label>
                <input type="text" class="form-control" name="username" id="username" value="{{old('username')}}" placeholder="input....">
            </div>

            <div class="form-group">
                <label for="password">password</label>
                <input type="password" class="form-control" name="password" id="password" value="" placeholder="input....">
            </div>

            <div class="form-group">
                <label for="email">email</label>
                <input type="email" class="form-control" name="email" id="email" value="{{old('email')}}" placeholder="input....">
            </div>

            <div class="form-group">
                <label for="image">image</label>
                <input type="file" class="form-control" name="image" id="image" placeholder="input....">
            </div>


            <button type="submit" class="btn btn-primary">Rigester</button>
        </form>
@endsection
