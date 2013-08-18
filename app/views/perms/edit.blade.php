@extends('templates.main')

@section('content')
<p>{{ Lang::get('messages.NEW PERM') }} </p>
 <!-- topbar ends -->
    <div class="container-fluid">
    <div class="row-fluid">
        
  	  @include('templates.leftbar')
      
      
      <div id="content" class="span10">
      <!-- content starts -->
      

      @include('templates.breadcrumb')


{{ Form::open(array('route' => array('perms.update', $perm->id), 'method' => 'PUT', 'class' => 'form-horizontal')) }}
{{ Form::hidden('actionType', 'update') }}
{{ Form::token(); }}
<!-- name -->
{{ Form::label('name', Lang::get('perms.name')); }}
{{ $errors->first('name', '<div class="alert alert-error"><button type="button" class="close" data-dismiss="alert">&times;</button>:message</div>') }}
{{ Form::text('name', $perm->name ,array('required')); }}

<!-- module -->
{{ Form::label('module', Lang::get('perms.module')); }}
{{ $errors->first('module', '<div class="alert alert-error"><button type="button" class="close" data-dismiss="alert">&times;</button>:message</div>') }}
{{ Form::text('module', $perm->module, array('required')); }}

<!-- submit -->
{{ Form::submit( Lang::get('perms.Send!')); }}
@stop