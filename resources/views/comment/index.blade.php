@extends('layout.main')
@section('title' , 'view from data base')

@section('content')
    @if(count($comments) > 0)
        @foreach($comments as $comment)
            <div class="first">
                <div class="row">
                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                        {{$comment->created_at}}
                    </div>


                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                        {{$comment->name}}
                    </div>
                </div>

                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <a href="{{route('comments.show', $comment->id)}}">
                            {{$comment->comment}}
                        </a>
                    </div>
                </div>
            </div>
            @endforeach
        @endif
    @endsection
