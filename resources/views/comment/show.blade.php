@extends('layout.main')
@section('title' , 'new comment')
@section('content')
    @include('layout.errormasage')
    <h1> {{$comment->comment}}</h1>
@endsection
