@extends('templates.main')

@section('content')
@if($users)
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
            <h2><i class="icon-user"></i> {{ Lang::get('messages.LIST USER') }} </h2>
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
                  	<td>{{ Lang::get('messages.Group') }} </td>
					<td>{{ Lang::get('messages.Name') }} </td>
					<td>{{ Lang::get('messages.Email') }} </td>
					<td>{{ Lang::get('messages.Username') }} </td>
					<td>{{ Lang::get('messages.Delete') }}</td>
				</tr>
                </tr>
              </thead>   
              <tbody>
              

                @foreach ($users as $user)
			 	<tr>
				    <td  class="center"> {{ $user->group_id }} </td>
					<td  class="center">
						{{ link_to_route('users.edit', $user->name, array($user->id)) }}
					</td>
				    <td  class="center">  {{ $user->email }} </td>
				 	<td  class="center"> {{ $user->username }} </td>
					
					<td class="center ">
						<a href="#" class="btn btn-success">
							<i class="icon-zoom-in icon-white"></i>  
								View                                           
						</a>
						<a href="/bintra/public/users/{{ $user->id }}/edit" class="btn btn-info">
							<i class="icon-edit icon-white"></i>  
								Edit                                            
						</a>
						<a href="#" class="btn btn-danger">
							<i class="icon-trash icon-white"></i> 
								Delete
						 </a>
					</td>
				<!--	  {{ Form::open(array('route' => array('users.destroy', $user->id), 'method' => 'DELETE', 'class' => 'form-horizontal')) }}
				      	{{ link_to_route('users.destroy', Lang::get('messages.DELETE'), array($user->id)) }}
				      {{ Form::close() }} 
				    </td> -->
			  	</tr>
			@endforeach
	@endif

            <!--  <tr>
                <td>David R</td>
                <td class="center">2012/01/01</td>
                <td class="center">Member</td>
                <td class="center">
                  <span class="label label-success">Active</span>
                </td>
                <td class="center">
                  <a class="btn btn-success" href="#">
                    <i class="icon-zoom-in icon-white"></i>  
                    View                                            
                  </a>
                  <a class="btn btn-info" href="#">
                    <i class="icon-edit icon-white"></i>  
                    Edit                                            
                  </a>
                  <a class="btn btn-danger" href="#">
                    <i class="icon-trash icon-white"></i> 
                    Delete
                  </a>
                </td>
              </tr> -->


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
