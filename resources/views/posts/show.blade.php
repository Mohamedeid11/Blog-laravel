@extends('layout.master')
@section('content')
    <div class="row mt-2">
        <div class=" col-md-4">
            <div class="card mb-3" style="min-width: 18rem;">
                <div class="card-body">
                    <div class="card-title">
                        <h4> {{$post->posts}}</h4>
                    </div>
                    <img src="{{ asset('/storage/Images/' . $post->image)}}" alt="">
                    <div class="card-text">
                        {{$post->posts}}
                    </div>
                    <hr>
                    <small class="text-muted"><p> created at :{{$post->created_at}}</p> </small>
                    <small class="text-muted"><p> created By :{{$post->user->name}}</p> </small>

                    @auth
                        @if(auth()->user()->id ==$post->user_id)
                    <a href="{{'/posts/' . $post->id . '/edit'}}" class="btn btn-primary float-left"> Edit</a>
                    <form action="{{route('posts.destroy' , ['id' => $post->id])}}" method="post">
                        @csrf
                        @method('delete')
                        <button class="btn btn-danger float-right" type="submit">Delete</button>
                    </form>
                            @endif
                        @endauth
                </div>
            </div>
        </div>
    </div>
    @endsection
