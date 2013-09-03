@extends('templates.main')

@section('content')
<style type="text/css">
  .destino_name {
    display: none;
  }
</style>
@if($users)
 <h3 class="thin underline">Usuarios</h3>
<div style="float:right;margin-top:-50px;">
  <a class="button icon-add-user with-tooltip" href="users/create" title="Crear nuevo usuario"></a>
</div>
<div class="new-row twelve-columns">
  <table class="simple-table responsive-table responsive-table-on" id="sorting-example2">
    <thead>
      <tr>
        <th class="header headerSortDown hide-on-mobile" scope="col">{{ Lang::get('messages.Group') }} </td>
        <th width="30%" scope="col" class="hide-on-mobile header hide-on-mobile">{{ Lang::get('messages.Name') }} </td>
        <th width="30%" scope="col" class="hide-on-mobile header hide-on-mobile">{{ Lang::get('messages.Email') }}</td>
        <th width="30%" scope="col" class="hide-on-mobile header hide-on-mobile">{{ Lang::get('messages.Username') }}</td>
        <th width="30%" scope="col" class="hide-on-mobile header hide-on-mobile">{{ Lang::get('messages.Delete') }}</td>
      </tr>
    </thead>

    <tbody>
      @foreach ($users as $user)
        <tr>
          <th class="center group_id <?php echo $user->id?> selectable">
            <span class="original_name"><?php $group_id = Group::find($user->group_id); ?> {{ $group_id->name }}</span>
            <span class="destino_name">{{ Form::select(null, $group_data, $group_id->name, array('class' => 'group_data', 'width' => '500px', 'required')); }}</span>
          </th>

          <!-- name -->
          <td class="center name <?php echo $user->id?> editable">{{ $user->name }}</td>

          <!-- email -->
          <td  class="center email <?php echo $user->id?> editable">{{ $user->email }}</td>

          <!-- username -->
          <td  class="center username <?php echo $user->id?> editable">{{ $user->username }}</td>
          
          <td>
            {{ Form::open(array('method' => 'GET', 'route' => array('users.show', $user->id))) }}
            <a class="button icon-download" href="users/{{ $user->id }}">View</a>
            {{ Form::close() }}
            <a class="button icon-pencil" href="/bintra/public/users/{{ $user->id }}/edit">Edit</a>
             {{Form::open(array('route' => array('users.destroy', $user->id), 'method' => 'delete'))}}
              {{Form::submit('Delete', array('class' => 'button icon-trash confirm'))}}
            {{Form::close()}}
          </td>
        </tr>
      @endforeach

    </tbody>
  </table>
</div>
@endif

          
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
