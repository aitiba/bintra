@extends('templates.main')

@section('content')
<p>{{ Lang::get('messages.NEW USER') }} </p>
 <!-- topbar ends -->
    <div class="container-fluid">
    <div class="row-fluid">
        
  	  @include('templates.leftbar')
      
      
      <div id="content" class="span10">
      <!-- content starts -->
      

      @include('templates.breadcrumb')


<!-- group_id -->
{{ Form::label('group_id',  Lang::get('users.group_id')); }}
{{ Form::select('group_id', array(1 => 'admin'), $user->group_id, array('required')); }}

<!-- name -->
{{ Form::label('name', Lang::get('users.name')); }}
{{ $errors->first('name', '<div class="alert alert-error"><button type="button" class="close" data-dismiss="alert">&times;</button>:message</div>') }}
{{ Form::text('name', $user->name ,array('required')); }}

<!-- email -->
{{ Form::label('email', Lang::get('users.email')); }}
{{ $errors->first('email', '<div class="alert alert-error"><button type="button" class="close" data-dismiss="alert">&times;</button>:message</div>') }}
{{ Form::email('email', $user->email, array('required')); }}


<!-- username -->
{{ Form::label('username', Lang::get('users.username')); }}
{{ $errors->first('username', '<div class="alert alert-error"><button type="button" class="close" data-dismiss="alert">&times;</button>:message</div>') }}
{{ Form::text('username', $user->username ,array('required')); }}

<!-- submit -->
{{ Form::submit( Lang::get('users.Send!')); }}

@stop