@extends('templates.main')

@section('content')

{{ $user->name }}

<p>{{ Lang::get('messages.NEW USER') }} </p>
{{ Form::open(array('url' => 'users')) }}

<!-- group_id -->
{{ $errors->first('group_id', 'HOLA') }}
{{ Form::select('group_id', array(1 => 'admin'), 'hola', array('required')) }}

<!-- name -->

{{ $errors->first('name', 'aaaaa') }}
{{ Form::text('name', 'name' ,array('required')) }}

<!-- email -->

{{ $errors->first('email', 'ggg') }}
{{ Form::email('email', '$user->email', array('required')) }}

<!-- password -->

{{ $errors->first('password', '<div class="alert alert-error"><button type="button" class="close" data-dismiss="alert">&times;</button>:message</div>') }}
{{ Form::password('password', null ,array('required')) }}
<p>Pasahitzak minimo zenbaki bat, letra xehe bat, lerra larri bat eta hauetako karaktere bereziren bat: @#$%!_$% behar du eduki eta 8 eta 20 karaktere artean.</p>

<!-- username -->

{{ $errors->first('username', '<div class="alert alert-error"><button type="button" class="close" data-dismiss="alert">&times;</button>:message</div>') }}
{{ Form::text('username', '$user->username' ,array('required')) }}

<!-- submit -->


@stop