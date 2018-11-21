@extends('layout.app')
@section('content')
<h2 class="text-center text-white bg-danger">Creer un evenement</h2>
<div class="container col-lg-4">
	<form action="{{route('events.store')}}" method="post">
		
	<div class="has-error form-group" >
		@csrf
	<label for="title" class="control-label">Title</label>
	<input type="text" name="title" class="form-control">	
	</div>
	<div class="has-error form-group">
	<label for="title" class="control-label">Description</label>
	<textarea rows="6" class="form-control" name="description" ></textarea>	
	</div>
	<input class="btn btn-primary form-group" type="submit" name="submit" value="Creer un evenement">
</form>
<a href="{{route('events.index')}}">Annuler</a>
</div>

@endsection