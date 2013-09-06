@extends('layouts.main')

@section('content')

<h3 class="thin underline">Crear group nuevo</h3>
<div class="columns">
<div class="six-columns">
{{ Form::open(array('url' => 'groups')) }}
{{ Form::token(); }}

        <p class="inline-large-label button-height">
            {{ Form::label('name', 'Name:', array('class' => 'label')) }}
            {{ Form::text('name', null, array('id' => 'name')) }}
        </p>

  <p class="button-height">
    {{ Form::submit('Create', array('class' => 'btn')) }}
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