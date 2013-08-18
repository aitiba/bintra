@extends('templates.main')

@section('content')
<style type="text/css">
  .destino_name {
    display: none;
  }
</style>
@if($perms)
 <!-- topbar ends -->
    <div class="container-fluid">
    <div class="row-fluid">
        
  	  @include('templates.leftbar')
      
      
      <div id="content" class="span10">
      <!-- content starts -->
      

      @include('templates.breadcrumb')
      
      <div class="row-fluid sortable">    
        <div class="box span12">
          <div class="box-header well" data-original-title>
            <div id="jsErrors"></div>
            <h2><i class="icon-user"></i> {{ Lang::get('messages.LIST PERM') }} </h2>
            <div class="box-icon">
              <a href="#" class="btn btn-setting btn-round"><i class="icon-cog"></i></a>
              <a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
              <a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a>
            </div>
          </div>
          <div class="box-content">
            <table class="table table-striped table-bordered bootstrap-datatable datatable">
              <thead>
                <tr>
                  	<td>{{ Lang::get('messages.Name') }} </td>
          					<td>{{ Lang::get('messages.Module') }} </td>
          					<td>{{ Lang::get('messages.Delete') }}</td>
          			</tr>
              </thead>   
          <tbody>
              
             
          @foreach ($perms as $perm)
			 	  <tr>
            <!-- name -->
  					<td class="center name <?php echo $perm->id?> editable">{{ $perm->name }}</td>

            <!-- module -->
        	  <td  class="center module <?php echo $perm->id?> editable">{{ $perm->module }}</td>

  					<td class="center ">
               {{ Form::open(array('method' => 'GET', 'route' => array('perms.show', $perm->id))) }}
               {{Form::submit('View')}}
  					  {{Form::close()}}
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
	@endif

              </tbody>
            </table>            
          </div>
        </div><!--/span-->
      
      </div><!--/row-->

      
        
          <!-- content ends -->
      </div><!--/#content.span10-->
        </div><!--/fluid-row-->
        
    <hr>

    <div class="modal hide fade" id="myModal">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">×</button>
        <h3>Settings</h3>
      </div>
      <div class="modal-body">
        <p>Here settings can be configured...</p>
      </div>
      <div class="modal-footer">
        <a href="#" class="btn" data-dismiss="modal">Close</a>
        <a href="#" class="btn btn-primary">Save changes</a>
      </div>
    </div>

    <footer>
      <p class="pull-left">&copy; <a href="http://usman.it" target="_blank">Muhammad Usman</a> 2012</p>
      <p class="pull-right">Powered by: <a href="http://usman.it/free-responsive-admin-template">Charisma</a></p>
    </footer>
    
  </div><!--/.fluid-container-->

@stop
