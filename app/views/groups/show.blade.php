@extends('layouts.scaffold')

@section('main')

<h1>Show Group</h1>

<p>{{ link_to_route('groups.index', 'Return to all groups') }}</p>

<table class="table table-striped table-bordered">
	<thead>
		<tr>
			<th>Name</th>
		</tr>
	</thead>

	<tbody>
		<tr>
			<td>{{{ $group->name }}}</td>

		</tr>
	</tbody>
</table>

@stop