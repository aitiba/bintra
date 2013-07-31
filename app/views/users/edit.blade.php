@extends('templates.main')

@section('content')


<p>{{ Lang::get('messages.NEW USER') }} </p>

{{ Form::open(array('route' => ['users.update', $user->id], 'method' => 'PUT', 'class' => 'form-horizontal')) }}

{{ Form::token(); }}
<!-- group_id -->
{{ Form::label('group_id',  Lang::get('users.group_id')); }}
{{ $errors->first('group_id', '<div class="alert alert-error"><button type="button" class="close" data-dismiss="alert">&times;</button>:message</div>') }}
{{ Form::select('group_id', array(1 => 'admin'), $user->group_id, array('required')); }}

<!-- name -->
{{ Form::label('name', Lang::get('users.name')); }}
{{ $errors->first('name', '<div class="alert alert-error"><button type="button" class="close" data-dismiss="alert">&times;</button>:message</div>') }}
{{ Form::text('name', $user->name ,array('required')); }}

<!-- email -->
{{ Form::label('email', Lang::get('users.email')); }}
{{ $errors->first('email', '<div class="alert alert-error"><button type="button" class="close" data-dismiss="alert">&times;</button>:message</div>') }}
{{ Form::email('email', $user->email, array('required')); }}

<!-- password -->
{{ Form::label('password', Lang::get('users.password')); }}
{{ $errors->first('password', '<div class="alert alert-error"><button type="button" class="close" data-dismiss="alert">&times;</button>:message</div>') }}
{{ Form::password('password', null ,array('required')); }}
<p>Pasahitzak minimo zenbaki bat, letra xehe bat, lerra larri bat eta hauetako karaktere bereziren bat: @#$%!_$% behar du eduki eta 8 eta 20 karaktere artean.</p>

<!-- username -->
{{ Form::label('username', Lang::get('users.username')); }}
{{ $errors->first('username', '<div class="alert alert-error"><button type="button" class="close" data-dismiss="alert">&times;</button>:message</div>') }}
{{ Form::text('username', $user->username ,array('required')); }}

<!-- submit -->
{{ Form::submit( Lang::get('users.Send!')); }}

{{ HTML::script('js/ckeditor.js') }}
{{ HTML::script('js/sample.js') }}
@stop