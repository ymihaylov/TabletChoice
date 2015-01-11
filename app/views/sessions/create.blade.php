	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

	<div class="container" style="margin-top: 80px">
	    <div class="row">
			<div class="col-md-6 col-md-offset-3">
	    		<div class="panel panel-default">
				  	<div class="panel-heading">
				    	<h3 class="panel-title">Login</h3>
				 	</div>
				  	<div class="panel-body">
				    	{{ Form::open(['route' => 'sessions.store']) }}
	                    <fieldset>

	                    	@if (Session::has('flash_message'))
								<p style="padding:5px" class="bg-success text-success">{{ Session::get('flash_message') }}</p>
							@endif

							@if (Session::has('error_message'))
								<p style="padding:5px" class="bg-danger text-danger">{{ Session::get('error_message') }}</p>
							@endif

				    	  	<!-- Email field -->
							<div class="form-group">
								{{ Form::text('email', null, ['placeholder' => 'Email', 'class' => 'form-control', 'required' => 'required'])}}
								{{ $errors->first('email') }}
							</div>

				    		<!-- Password field -->
							<div class="form-group">
								{{ Form::password('password', ['placeholder' => 'Password','class' => 'form-control', 'required' => 'required'])}}
								{{ $errors->first('password') }}
							</div>

				    		<div class="checkbox">
				    	    	<!-- Remember me field -->
								<div class="form-group">
									{{ Form::label('remember', 'Remember Me? ')}}
									{{ Form::checkbox('remember', 'remember') }}
								</div>
				    	    </div>

				    		<!-- Submit field -->
							<div class="form-group">
								{{ Form::submit('Login', ['class' => 'btn btn btn-lg btn-success btn-block']) }}
							</div>
				    	</fieldset>
				      	{{ Form::close() }}
				    </div>
				</div>
			</div>
		</div>
	</div>
