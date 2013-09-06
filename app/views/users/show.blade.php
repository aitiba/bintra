@extends('layouts.main')

@section('content')
  <h3 class="thin underline">Ver usuario</h3>
  <div class="columns">
  <div class="six-columns">
     <!-- group_id -->
  <p class="inline-large-label button-height">
    {{ Form::label('group_id',  'Grupo', array('class' => 'label')); }}
	{{ $user->group_id }}
  </p>

  <p class="inline-large-label button-height">
    <!-- name -->
	{{ Form::label('name', 'Nombre', array('class' => 'label')); }}
	{{ $user->name }}
	<span class="info-spot">
	  <span class="icon-info-round"></span>
	  <span class="info-bubble">
	    This is an information bubble to help the user.
	  </span>
	</span>
  </p>

  <p class="inline-large-label button-height">
    <!-- email -->
	{{ Form::label('email', 'Email', array('class' => 'label')); }}
	{{ $user->email }}
  </p>

  <p class="inline-large-label button-height">
    <!-- username -->
	{{ Form::label('username', 'Nombre de usuario', array('class' => 'label')); }}
	{{ $user->username }}
  </p>
</div>
</div>




@stop