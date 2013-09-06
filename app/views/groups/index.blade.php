@extends('layouts.main')

@section('content')

@if($groups)
  <h3 class="thin underline">groups</h3>
  <div style="float:right;margin-top:-50px;">
    <a class="button icon-add-user with-tooltip" href="groups/create" title="Crear nuevo group"></a>
  </div>

  <div class="new-row twelve-columns">
    <table class="simple-table responsive-table responsive-table-on" id="sorting-example2">
      <thead>
        <tr>
	     <th>Name</th>
		</tr>
	</thead>

	<tbody>
	 @foreach ($groups as $group)
    <tr>
    <td>{{{ $group->name }}}</td>

  	<td class="center">
        <!-- view -->
        <span class="button-group">
          {{ Form::open(array('method' => 'GET', 'route' => array('groups.show', $group->id))) }}
          <a class="button icon-download" href="groups/{{ $group->id }}">View</a>
            {{ Form::close() }}
        </span>

        <!-- edit -->
        <span class="button-group">
          <a class="button icon-pencil" href="/bintra/public/groups/{{ $group->id }}/edit">Edit</a>
        </span>

        <!-- delete -->
        <span class="button-group">
          {{ Form::open(array('route' => array('groups.destroy', $group->id), 'method' => 'delete')) }}
            {{ Form::submit('Delete', array('class' => 'button icon-trash confirm')) }}
          {{ Form::close() }}
              </span>
            </td>
    </tr>
  @endforeach
	</tbody>
  </table>
@else
	There are no groups
@endif

@stop