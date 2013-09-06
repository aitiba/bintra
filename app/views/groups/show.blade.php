@extends('layouts.main')

@section('content')
<h3 class="thin underline">Ver group</h3>
  <div class="columns">
  <div class="six-columns">

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
</div>
</div>

@stop