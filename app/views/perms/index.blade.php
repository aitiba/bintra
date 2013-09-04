@extends('templates.main')

@section('content')
<style type="text/css">
  .destino_name {
    display: none;
  }
</style>
{{ link_to_route('perms.create', '+ Perm') }}
@if($perms)
 <h3 class="thin underline">Permisos</h3>
<div style="float:right;margin-top:-50px;">
  <a class="button icon-add-user with-tooltip" href="perms/create" title="Crear nuevo permiso"></a>
</div>
<div class="new-row twelve-columns">
  <table class="simple-table responsive-table responsive-table-on" id="sorting-example2">
    <thead>
      <tr>
        <th class="header headerSortDown hide-on-mobile" scope="col">{{ Lang::get('messages.Name') }} </td>
        <th width="30%" scope="col" class="hide-on-mobile header hide-on-mobile">{{ Lang::get('messages.Module') }} </td>
        <th width="30%" scope="col" class="hide-on-mobile header hide-on-mobile">{{ Lang::get('messages.Delete') }}</td>
      </tr>
    </thead>

    <tbody>
      @foreach ($perms as $perm)
        <tr>
          <th class="hide-on-mobile">
            {{ $perm->name }}
          </th>
          <td class="hide-on-mobile">{{ $perm->module }}</td>
          <td class="center ">
             <!-- view -->
            <span class="button-group">
              {{ Form::open(array('method' => 'GET', 'route' => array('perms.show', $perm->id))) }}
              <a class="button icon-download" href="perms/{{ $perm->id }}">View</a>
              {{ Form::close() }}
            </span>

             <!-- delete -->
            <span class="button-group">
            {{ Form::open(array('route' => array('perms.destroy', $perm->id), 'method' => 'delete')) }}
              {{ Form::submit('Delete', array('class' => 'button glossy mid-margin-right')) }}
            {{ Form::close()}}
            </span>
          </td>
        </tr>
      @endforeach
    </tbody>
  </table>
</div>
@endif
@stop