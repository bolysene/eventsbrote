@extends('layout.app')
@section('content')
<div class="container col-lg-6">
<p>
<h1>{{$event->title}}</h1>
<p>{{$event->description}}</p>
</p>
<a href="{{route('events.edit',$event->slug)}}" class="btn btn-success btn-sm">Modifier un evenement</a> 
<a href="{{route('events.index')}}" class="btn btn-primary btn-sm">Voir tous les evenements</a>
<a href="{{route('events.destroy', $event)}}" class="btn btn-danger btn-sm" data-method="DELETE" data-confirm="Êtes-vous sûr ?">Supprimer</a>
</div>