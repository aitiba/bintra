@extends('templates.main')

@section('content')
<style type="text/css">
  .destino_name {
    display: none;
  }
</style>
{{ link_to_route('perms.create', '+ Perm') }}
@if($perms)
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
                         <!--  {{ Form::open(array('method' => 'GET', 'route' => array('perms.show', $perm->id))) }}
                           {{Form::submit('View')}}
                          {{Form::close()}} -->
                          <a href="/bintra/public/perms/{{ $perm->id }}/edit" class="btn btn-info">
                            <i class="icon-edit icon-white"></i>  
                              Edit                                            
                          </a>

                            {{Form::open(array('route' => array('perms.destroy', $perm->id), 'method' => 'delete'))}}
                            {{Form::submit('Delete')}}
                            {{Form::close()}}

                         
                        </td>
                      </tr>
                          @endforeach

                       </tbody>

                    </table>
</div>
@endif
@stop
