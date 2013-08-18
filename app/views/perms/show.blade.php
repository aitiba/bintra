@extends('templates.main')

@section('content')
<p>{{ Lang::get('messages.SHOW PERM') }} </p>
 <!-- topbar ends -->
    <div class="container-fluid">
    <div class="row-fluid">
        
  	  @include('templates.leftbar')
      
      
      <div id="content" class="span10">
      <!-- content starts -->
      

      @include('templates.breadcrumb')

<!-- name -->
{{ Form::label('name', Lang::get('users.name')); }}
{{ $errors->first('name', '<div class="alert alert-error"><button type="button" class="close" data-dismiss="alert">&times;</button>:message</div>') }}
{{ $perm->name }}

<!-- module -->
{{ Form::label('module', Lang::get('perms.module')); }}
{{ $errors->first('module', '<div class="alert alert-error"><button type="button" class="close" data-dismiss="alert">&times;</button>:message</div>') }}
{{ $perm->module }}

@stop