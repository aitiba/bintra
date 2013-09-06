@extends('layouts.main')

@section('content')

  <h3 class="thin underline">Editar group nuevo</h3>
  <div class="columns">
  <div class="six-columns">


{{ Form::open(array('route' => array('groups.update', $group->id), 'method' => 'PUT', 'class' => 'form-horizontal')) }}
{{ Form::hidden('actionType', 'update') }}
{{ Form::token(); }}
	<ul>
        <li>
            {{ Form::label('name', 'Name:') }}
            {{ Form::text('name') }}
        </li>

		<li>
			{{ Form::submit('Update', array('class' => 'btn btn-info')) }}
			{{ link_to_route('groups.show', 'Cancel', $group->id, array('class' => 'btn')) }}
		</li>
	</ul>
{{ Form::close() }}

@if ($errors->any())
	<ul>
		{{ implode('', $errors->all('<li class="error">:message</li>')) }}
	</ul>
@endif
</div>
</div>

@stop