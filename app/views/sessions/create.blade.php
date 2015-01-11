{{ Form::open(array('route' => 'sessions.store')) }}
	<div>
		{{ Form::email('email') }}
	</div>
	<div>
		{{ Form::password('password') }}
	</div>
	<div>
		{{ Form::submit('Login') }}
	</div>
{{ Form::close() }}