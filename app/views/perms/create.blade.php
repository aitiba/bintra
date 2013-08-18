@extends('templates.main')

@section('content')


<p>{{ Lang::get('messages.NEW PERM') }} </p>
{{ Form::open(array('url' => 'perms')) }}

{{ Form::token(); }}

<!-- name -->
{{ Form::label('name', Lang::get('perms.name')); }}
{{ $errors->first('name', '<div class="alert alert-error"><button type="button" class="close" data-dismiss="alert">&times;</button>:message</div>') }}
{{ Form::text('name', null ,array('required')); }}

<!-- module -->
{{ Form::label('module', Lang::get('users.module')); }}
{{ $errors->first('module', '<div class="alert alert-error"><button type="button" class="close" data-dismiss="alert">&times;</button>:message</div>') }}
{{ Form::text('module', null, array('required')); }}

<!-- submit -->
{{ Form::submit( Lang::get('perms.Send!')); }}
@stop
