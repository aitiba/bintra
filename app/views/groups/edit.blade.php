@extends('layouts.main')

@section('content')

  <h3 class="thin underline">Editar group nuevo</h3>
  <div class="columns">
  <div class="six-columns">


{{ Form::open(array('route' => array('groups.update', $group->id), 'method' => 'PUT', 'class' => 'form-horizontal')) }}
{{ Form::hidden('actionType', 'update') }}
{{ Form::token(); }}

        <p class="inline-large-label button-height">
            {{ Form::label('name', 'Name:', array('class' => 'label')) }}
            {{ Form::text('name', $group->name, array('id' => 'name')) }}
        </p>

  <p class="button-height">
    {{ Form::submit('Update', array('class' => 'btn btn-info')) }}
 </p>
{{ Form::close() }}

@if ($errors->any())
	<ul>
		{{ implode('', $errors->all('<li class="error">:message</li>')) }}
	</ul>
@endif
</div>
</div>

@stop