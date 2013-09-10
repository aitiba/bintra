@extends('layouts.main')

@section('content')

  <h3 class="thin underline">Editar project nuevo</h3>
  <div class="columns">
  <div class="six-columns">


{{ Form::open(array('route' => array('projects.update', $project->id), 'method' => 'PUT', 'class' => 'form-horizontal')) }}
{{ Form::hidden('actionType', 'update') }}
{{ Form::token(); }}

        <p class="inline-large-label button-height">
            {{ Form::label('name', 'Name:', array('class' => 'label')) }}
            {{ Form::text('name', $project->name, array('id' => 'name')) }}
        </p>

        <p class="inline-large-label button-height">
            {{ Form::label('description', 'Description:', array('class' => 'label')) }}
            {{ Form::textarea('description') }}
        </p>

        <p class="inline-large-label button-height">
            {{ Form::label('inicio', 'Inicio:', array('class' => 'label')) }}
            {{ Form::text('inicio', $project->inicio, array('id' => 'inicio')) }}
        </p>

        <p class="inline-large-label button-height">
            {{ Form::label('cost', 'Cost:', array('class' => 'label')) }}
            {{ Form::text('cost', $project->cost, array('id' => 'cost')) }}
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