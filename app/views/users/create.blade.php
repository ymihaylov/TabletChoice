@extends('layout')

@section('content')
	<h1>Create New User</h1>
	{{ Form::open(['route' => 'users.store']) }}
		<div>
			{{ Form::label('email', 'Email') }}
			{{ Form::text('email') }}
			{{ $errors->first('email') }}
		</div>
		<div>
			{{ Form::label('name', 'name') }}
			{{ Form::text('name') }}
			{{ $errors->first('name') }}
		</div>

		<div>
			{{ Form::label('password', 'password') }}
			{{ Form::password('password') }}
			{{ $errors->first('password') }}
		</div>

		<div>
			{{ Form::submit('Create New User') }}
		</div>
	{{ Form::close() }}
@stop