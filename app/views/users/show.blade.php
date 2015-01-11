@extends('layout')

@section('content')
	@foreach ($users as $user)
		<li>{{ link_to("/users/{$user->firstname}", $user->firstname) }}</li>
	@endforeach
@stop