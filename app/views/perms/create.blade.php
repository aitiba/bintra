@extends('templates.main')

@section('content')
<style type="text/css">
  .destino_name {
    display: none;
  }
</style>
<div class="new-row four-columns">
<p>NUEVO PERMISO </p>
{{ Form::open(array('url' => 'perms')) }}
{{ Form::token(); }}

<!-- name -->
{{ Form::label('name', 'Name'); }}
{{ $errors->first('name', '<div class="alert alert-error"><button type="button" class="close" data-dismiss="alert">&times;</button>:message</div>') }}
{{ Form::text('name', null ,array('required', 'class' => 'input full-width')); }}

<!-- module -->
{{ Form::label('module', 'Module'); }}
{{ $errors->first('module', '<div class="alert alert-error"><button type="button" class="close" data-dismiss="alert">&times;</button>:message</div>') }}
{{ Form::text('module', null ,array('required',  'class' => 'input full-width')); }}

<!-- submit -->
{{ Form::submit('Crear', array('class' => 'button big')); }}
</div>
@stop
