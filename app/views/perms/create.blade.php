@extends('layouts.main')

@section('content')

  <h3 class="thin underline">Crear permiso nuevo</h3>
  <div class="columns">
  <div class="six-columns">
{{ Form::open(array('url' => 'perms')) }}
{{ Form::token(); }}

<!-- name -->
<p class="inline-large-label button-height">
{{ Form::label('name', 'Name', array('class' => 'label')); }}
{{ $errors->first('name', '<div class="alert alert-error"><button type="button" class="close" data-dismiss="alert">&times;</button>:message</div>') }}
{{ Form::text('name', null ,array('required', 'class' => 'input full-width')); }}
</p>

<!-- module -->
<p class="inline-large-label button-height">
{{ Form::label('module', 'Module', array('class' => 'label')); }}
{{ $errors->first('module', '<div class="alert alert-error"><button type="button" class="close" data-dismiss="alert">&times;</button>:message</div>') }}
{{ Form::text('module', null ,array('required',  'class' => 'input full-width')); }}
</p>

<!-- submit -->
{{ Form::submit('Crear', array('class' => 'button')); }}
</div>
@stop
