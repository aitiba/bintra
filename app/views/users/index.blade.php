@extends('templates.main')

@section('content')
<style type="text/css">
  .destino_name {
    display: none;
  }
</style>
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
            <div id="jsErrors"></div>
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
          <!-- group_id -->
				  <td class="center group_id <?php echo $user->id?> selectable">
               <span class="original_name"><?php $group_id = Group::find($user->group_id); ?> {{ $group_id->name }}</span>
               <span class="destino_name">{{ Form::select(null, $group_data, $group_id->name, array('class' => 'group_data', 'width' => '500px', 'required')); }}</span>
          </td>

          <!-- name -->
					<td class="center name <?php echo $user->id?> editable">{{ $user->name }}</td>

          <!-- email -->
      	  <td  class="center email <?php echo $user->id?> editable">{{ $user->email }}</td>

          <!-- username -->
				 	<td  class="center username <?php echo $user->id?> editable">{{ $user->username }}</td>
					
					<td class="center ">
             {{ Form::open(array('method' => 'GET', 'route' => array('users.show', $user->id))) }}
						<a href="#" class="btn btn-success">
							<i class="icon-zoom-in icon-white"></i>  
								View                                           
						</a>
            
						<a href="/bintra/public/users/{{ $user->id }}/edit" class="btn btn-info">
							<i class="icon-edit icon-white"></i>  
								Edit                                            
						</a>
                
             {{ Form::open(array('method' => 'DELETE', 'route' => array('users.destroy', $user->id))) }}
              <a href="#" class="btn btn-danger">
                <i class="icon-trash icon-white"></i> 
                  Delete
               </a>
             {{ Form::close() }}
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

  <script type="text/javascript">
    // select
    $('.original_name').click(function(){  
       $(this).css('display', 'none');
       $(this).next().addClass('ajax');  
       $(this).next().css('display', 'block');
     });

    /*$('.destino_name').live('blur',function(){
      alert("pasa");
      
    });*/

$(".destino_name").on("change", function(e) { 
      // Hacer el POST para guardar
       //if(event.which == 13)
       //{
        arr = $(this).parent().attr('class').split( " " );
        $.ajax({
          type: "POST",
          url:"users/updateSelect",
         // dataType: "json",
          data: "value="+$('.group_data').val()+"&field="+arr[1]+"&id="+arr[2],
          success: function(data){
            //alert($(".ajax select").val());
            $('#jsErrors').empty().append(data);
           // $('.original_name').css('display', 'block');
            //$(this).prev().append('hola');
            //$('.destino_name').prev().append('hola');
            //$(".destino_name").css('display', 'none');
            //$('.ajax').removeClass('ajax');
          }
        });
      //}

    
    });
    // select FIN

    // textfield
    $('.editable').click(function(){  
   //  alert($(this).text());
      $('body').append('<input type="hidden" value="'+ $(this).text() +'" id="original_value">');         
      $(this).addClass('ajax');  
      $(this).html('<td><input id="editbox" size="'+  
      $(this).text().length+'" value="' + $(this).text()+'" type="text"></td>');
      $('#editbox').focus();  
    });

    $('.editable').keydown(function(event){
      arr = $(this).attr('class').split( " " );
      //alert(arr);
      if(event.which == 13)
      { 
       // alert($('#original_value').val());
       // alert($('.ajax input').val());
        //alert("si");
        $.ajax({
          type: "POST",
          url:"users/updateUsername",
         // dataType: "json",
          data: "value="+$('.ajax input').val()+"&field="+arr[1]+"&id="+arr[2],
          success: function(data){
            if (data != 'Saved') {
              $('.ajax').html($('#original_value').val());
            } else {
              // borrar .original_value
              $('.ajax').html($('.ajax input').val());
            }
            $('#jsErrors').empty().append(data);
            $('.ajax').removeClass('ajax');
          }
        });
      }
    });

    // atachea el evento blur a #editbox
    // el evento on blur ocurre cuando se sale del campo
    $('#editbox').live('blur',function(){
      //alert("entra");
      $('.ajax').html($('.ajax input').val());
      $('.ajax').removeClass('ajax');
    });
        // textfield FIN
  </script>
@stop
