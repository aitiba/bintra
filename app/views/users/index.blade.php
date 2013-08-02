@extends('templates.main')

@section('content')
<p> {{ Lang::get('messages.LIST USER') }} </p>
@if($users)
	<table>
		<tr>
			<td>{{ Lang::get('messages.Group') }} </td>
			<td>{{ Lang::get('messages.Name') }} </td>
			<td>{{ Lang::get('messages.Email') }} </td>
			<td>{{ Lang::get('messages.Username') }} </td>
			<td>{{ Lang::get('messages.Delete') }}</td>
		</tr>

		@foreach ($users as $user)
		 	<tr>
			    <td> {{ $user->group_id }} </td>
				<td>
					{{ link_to_route('users.edit', $user->name, array($user->id)) }}
				    </td>
			    <td>  {{ $user->email }} </td>
			 	<td> {{ $user->username }} </td>
				<td>
				  {{ Form::open(array('route' => array('users.destroy', $user->id), 'method' => 'DELETE', 'class' => 'form-horizontal')) }}
			      	{{ link_to_route('users.destroy', Lang::get('messages.DELETE'), array($user->id)) }}
			      {{ Form::close() }}
			    </td> 
		  	</tr>
		@endforeach
	</table>
@endif
@stop
