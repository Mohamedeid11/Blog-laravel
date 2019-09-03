@extends('layout.main')
@section('title' , 'addnew comment')

@section('content')
    @include('layout.errormasage')
    <form action="{{route('comment.store')}}" method="POST" role="form">
        {{csrf_field()}}
    	<legend> Add new comment</legend>
    
    	<div class="form-group">
    		<label for=""></label>
    		<input type="text" class="form-control" name="name" id="name" placeholder="Input...">
    	</div>

        <div class="form-group">
            <label for=""></label>
            <textarea class="form-control" rows="4" name="comment"></textarea>
        </div>
    
    	
    
    	<button type="submit" class="btn btn-primary">Submit</button>
    </form>
    @endsection
