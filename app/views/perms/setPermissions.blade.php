@extends('layouts.main')

@section('content')
{{ link_to_route('perms.create', '+ Perm') }}
 <h3 class="thin underline">Set permisos</h3>
<div style="float:right;margin-top:-50px;">
  <a class="button icon-add-user with-tooltip" href="perms/create" title="Crear nuevo permiso"></a>
</div>
<div class="new-row twelve-columns">
  <div  id="myMessages"></div>
  <table class="simple-table responsive-table responsive-table-on" id="sorting-example2">
        <?php $width= 100 / count($groups)+1 ?>
      <tr>
        <td>&nbsp;</td>
        @foreach ($groups as $group)
          <td width="{{ $width }}" scope="col" class="hide-on-mobile header hide-on-mobile">{{ $group->name }} </td>
        @endforeach
      </tr>

        @foreach ($perms as $perm)
        <tr>
          <td class="hide-on-mobile" width="{{ $width }}">
            {{ $perm->name }}.{{ $perm->module }}
          </td>
          <?php for ($i = 1; $i <= count($groups); $i++) {  
            if (\Perm::find($perm->id)->groups()->having('pivot_group_id','=', $groups[$i-1]['id'])->first()) {
              $value = 1;
              $checked = "checked";
            } else {
              $value = 0;
              $checked = "";
            } ?>
            <td><form>
              <input type="checkbox"  {{ $checked }} value="{{ $value }}" name="check" id="check{{ $groups[$i-1]['id'] }}{{ $perm->id }}" data-group={{ $groups[$i-1]['id'] }} data-perm={{ $perm->id }}>
            </form></td>
          <?php } ?>
          
        
      </tr>
        @endforeach
  
    
  </table>
</div>
<script type="text/javascript">
  $('input[type=checkbox]').on("click", function(e) { 
    var group = $(this).data("group");
    var perm = $(this).data("perm");
    var selected = $(this).val();
   
    $.ajax({
          type: "POST",
          url:"perms/setPostPermissions",
          data: { group: group, perm: perm, value: selected },
          success: function(data){
            if(data == 'new') {
              $('input#check'+group+perm).val(1);
              $('#myMessages').empty().append("<p class='message icon-speech grey-gradient small-margin-bottom'><a href='' title='Hide message' class='close'>✕</a> Añadido correctamente.</p>");
            //want to delete a perm group
            }else {
              $('input#check'+group+perm).val(0);
              $('#myMessages').empty().append("<p class='message icon-speech grey-gradient small-margin-bottom'><a href='' title='Hide message' class='close'>✕</a> Borrado correctamente.</p>");
            }
          }
        });
  });
</script>
@stop