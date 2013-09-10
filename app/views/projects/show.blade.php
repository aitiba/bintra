@extends('layouts.main')

@section('content')
<h3 class="thin underline">Ver project</h3>
  <div class="columns">
  <div class="six-columns">

<table class="table table-striped table-bordered">
	<thead>
		<tr>
			<th>Name</th>
				<th>Description</th>
				<th>Inicio</th>
				<th>Cost</th>
		</tr>
	</thead>

	<tbody>
		<tr>
			<td>{{{ $project->name }}}</td>
					<td>{{{ $project->description }}}</td>
					<td>{{{ $project->inicio }}}</td>
					<td>{{{ $project->cost }}}</td>

		</tr>
	</tbody>
</table>
</div>
</div>

@stop