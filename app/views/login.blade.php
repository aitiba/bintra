@extends('templates.main')

@section('content')

<div class="span6">
      		
      		
      		<div class="widget stacked">
					
				<div class="widget-header">
					<i class="icon-user"></i>
					<h3>{{ Lang::get('messages.Login') }}</h3>
				</div> <!-- /widget-header -->
				
				<div class="widget-content">
					{{ Form::open(array('url' => 'login')) }}
					<!-- check for login errors flash var -->
					<!-- username field -->
					<p>{{ Form::label('username', Lang::get('messages.Username')) }}</p>
					<p>{{ Form::text('username', null ,array('required')) }}</p>
					<!-- password field -->
					<p>{{ Form::label('password', Lang::get('messages.Password')) }}</p>
					<p>{{ Form::password('password') }}</p>
					<!-- submit button -->
					<p>{{ Form::submit( Lang::get('messages.login')) }}</p>
					{{ Form::close() }}
				</div>
			</div>
</div>
@stop
</body>
</html>
