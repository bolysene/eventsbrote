@extends('layout.app')
@section('content')
<div class="container col-lg-6">
	<h1>{{$events->count()}} {{str_plural('Evenement',$events->count())}} </h1>
	@if($events-> count() > 0)
	
	<ul>
		@foreach($events as $event)
		<li>
	<a href="{{route('events.show',[$event->slug])}}" class="btn-link navbar-item">{{$event->title}}</a>
	</li>
	@endforeach
	</ul>
	{{$events->links('vendor.pagination.bootstrap-4')}}
	<a href="{{route('events.create')}}" class="btn btn-danger">Creer un evenement</a>
	
@else


<p>il y'a aucun evenement</p>
@endif
</p>
</div>
@endsection