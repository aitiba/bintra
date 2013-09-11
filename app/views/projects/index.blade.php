@extends('layouts.main')

@section('content')

@if($projects)
  <h3 class="thin underline">projects</h3>
  <div style="float:right;margin-top:-50px;">
    <a class="button icon-add-user with-tooltip" href="projects/create" title="Crear nuevo project"></a>
  </div>

  <div class="new-row twelve-columns">
    <table class="simple-table responsive-table responsive-table-on" id="sorting-example2">
      <thead>
        <tr>
	     <th>Name</th>
				<th>Description</th>
				<th>Inicio</th>
				<th>Cost</th>
		</tr>
	</thead>

	<tbody>
	 @foreach ($projects as $project)
    <tr>
    <td>{{{ $project->name }}}</td>
					<td>{{ $project->description }}</td>
					<td>{{{ $project->inicio }}}</td>
					<td>{{{ $project->cost }}}</td>

  	<td class="center">
        <!-- view -->
        <span class="button-group">
          {{ Form::open(array('method' => 'GET', 'route' => array('projects.show', $project->id))) }}
          <a class="button icon-download" href="projects/{{{ $project->id }}}">View</a>
            {{ Form::close() }}
        </span>

        <!-- edit -->
        <span class="button-group">
          <a class="button icon-pencil" href="/bintra/public/projects/{{{ $project->id }}}/edit">Edit</a>
        </span>

        <!-- delete -->
        <span class="button-group">
          {{ Form::open(array('route' => array('projects.destroy', $project->id), 'method' => 'delete')) }}
            {{ Form::submit('Delete', array('class' => 'button icon-trash confirm')) }}
          {{ Form::close() }}
              </span>
            </td>
    </tr>
  @endforeach
	</tbody>
  </table>
@else
	There are no projects
@endif

@stop