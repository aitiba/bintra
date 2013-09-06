@extends('layouts.main')

@section('content')

  <h3 class="thin underline">Editar permiso nuevo</h3>
  <div class="columns">
  <div class="six-columns">


{{ Form::open(array('route' => array('perms.update', $perm->id), 'method' => 'PUT', 'class' => 'form-horizontal')) }}
{{ Form::hidden('actionType', 'update') }}
{{ Form::token(); }}

<!-- name -->
<p class="inline-large-label button-height">
{{ Form::label('name', Lang::get('perms.name'), array('class' => 'label')); }}
{{ $errors->first('name', '<div class="alert alert-error"><button type="button" class="close" data-dismiss="alert">&times;</button>:message</div>') }}
{{ Form::text('name', $perm->name ,array('required')); }}
</p>

<!-- module -->
<p class="inline-large-label button-height">
{{ Form::label('module', Lang::get('perms.module'), array('class' => 'label')); }}
{{ $errors->first('module', '<div class="alert alert-error"><button type="button" class="close" data-dismiss="alert">&times;</button>:message</div>') }}
{{ Form::text('module', $perm->module, array('required')); }}
</p>

<!-- submit -->
<p class="inline-large-label button-height">
{{ Form::submit( Lang::get('perms.Send!')); }}
</p>
@stop