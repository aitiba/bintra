@extends('layouts.main')

@section('content')
<h3 class="thin underline">Ver permiso</h3>
  <div class="columns">
  <div class="six-columns">

<!-- name -->
  <p class="inline-large-label button-height">
{{ Form::label('name', Lang::get('users.name'), array('class' => 'label')); }}
{{ $errors->first('name', '<div class="alert alert-error"><button type="button" class="close" data-dismiss="alert">&times;</button>:message</div>') }}
{{ $perm->name }}
</p>

<!-- module -->
  <p class="inline-large-label button-height">
{{ Form::label('module', Lang::get('perms.module'), array('class' => 'label')); }}
{{ $errors->first('module', '<div class="alert alert-error"><button type="button" class="close" data-dismiss="alert">&times;</button>:message</div>') }}
{{ $perm->module }}
</p>

@stop