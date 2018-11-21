@extends('layout.app')
@section('content')
<h2 class="text-center text-white bg-danger">Modifier l'evenement {{$event->id}}</h2>
<div class="container col-lg-4">
	<form action="{{route('events.update',$event)}}" method="post">
		{{method_field('PUT')}}
	<div class="has-error form-group" >
		@csrf
	<label for="title" class="control-label">Title</label>
	
	<input type="text" name="title" class="form-control" value="{{old() ? old() : $event->title}}">
	@if($errors->has('title'))
		<p class="alert alert danger">{{$errors->first('title')}}</p>
	@endif	
	</div>
	<div class="has-error form-group">
	<label for="title" class="control-label">Description</label>
	<textarea rows="6" class="form-control" name="description">{{old()? old() : $event->title}}</textarea>	
	</div>
	@if($errors->has('description'))
		<p class="alert alert danger">{{$errors->first('description')}}</p>
	@endif
	<input class="btn btn-primary form-group" type="submit" name="submit" value="Modifier un evenement">
</form>
</div>

@endsection