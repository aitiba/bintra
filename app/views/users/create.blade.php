@extends('layouts.main')

@section('content')
  <h3 class="thin underline">Crear usuario nuevo</h3>
  <div class="columns">
  <div class="six-columns">

{{ Form::open(array('url' => 'users')) }}

{{ Form::token(); }}

<!-- group_id -->
<p class="inline-large-label button-height">
{{ Form::label('group_id',  Lang::get('users.group_id'), array('class' => 'label')); }}
{{ $errors->first('group_id', '<div class="alert alert-error"><button type="button" class="close" data-dismiss="alert">&times;</button>:message</div>') }}
{{ Form::select('group_id', array(1 => 'admin'), 1, array('required')); }}
</p>

<!-- name -->
<p class="inline-large-label button-height">
{{ Form::label('name', Lang::get('users.name'), array('class' => 'label')); }}
{{ $errors->first('name', '<div class="alert alert-error"><button type="button" class="close" data-dismiss="alert">&times;</button>:message</div>') }}
{{ Form::text('name', null ,array('required')); }}
</p>

<!-- email -->
<p class="inline-large-label button-height">
{{ Form::label('email', Lang::get('users.email'), array('class' => 'label')); }}
{{ $errors->first('email', '<div class="alert alert-error"><button type="button" class="close" data-dismiss="alert">&times;</button>:message</div>') }}
{{ Form::email('email', null, array('required')); }}
</p>

<!-- password -->
<p class="inline-large-label button-height">
{{ Form::label('password', Lang::get('users.password'), array('class' => 'label')); }}
{{ $errors->first('password', '<div class="alert alert-error"><button type="button" class="close" data-dismiss="alert">&times;</button>:message</div>') }}
{{ Form::password('password', null ,array('required')); }}
</p>

<!-- password_confirmation -->
<p class="inline-large-label button-height">
{{ Form::label('password_confirmation', Lang::get('users.password_confirmation'), array('class' => 'label')); }}
{{ $errors->first('password_confirmation', '<div class="alert alert-error"><button type="button" class="close" data-dismiss="alert">&times;</button>:message</div>') }}
{{ Form::password('password_confirmation', null ,array('required')); }}
</p>
<p>Pasahitzak minimo zenbaki bat, letra xehe bat, lerra larri bat eta hauetako karaktere bereziren bat: @#$%!_$% behar du eduki eta 8 eta 20 karaktere artean.</p>

<!-- username -->
<p class="inline-large-label button-height">
{{ Form::label('username', Lang::get('users.username'), array('class' => 'label')); }}
{{ $errors->first('username', '<div class="alert alert-error"><button type="button" class="close" data-dismiss="alert">&times;</button>:message</div>') }}
{{ Form::text('username', null ,array('required')); }}
</p>
<!-- submit -->
{{ Form::submit( Lang::get('users.Send!'), array('class' => 'buttom')); }}

{{ HTML::script('js/ckeditor.js') }}
{{ HTML::script('js/sample.js') }}
</div>
</div>
@stop

