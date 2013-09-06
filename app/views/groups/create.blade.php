@extends('layouts.main')

@section('content')

<h3 class="thin underline">Crear group nuevo</h3>
<div class="columns">
<div class="six-columns">
{{ Form::open(array('url' => 'groups')) }}
{{ Form::token(); }}

<ul>
        <li>
            {{ Form::label('name', 'Name:') }}
            {{ Form::text('name') }}
        </li>

  <li>
    {{ Form::submit('Submit', array('class' => 'btn')) }}
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