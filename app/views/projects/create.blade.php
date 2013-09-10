@extends('layouts.main')

@section('content')

<h3 class="thin underline">Crear project nuevo</h3>
<div class="columns">
<div class="six-columns">
{{ Form::open(array('url' => 'projects')) }}
{{ Form::token(); }}

        <p class="inline-large-label button-height">
            {{ Form::label('name', 'Name:', array('class' => 'label')) }}
            {{ Form::text('name', null, array('id' => 'name')) }}
        </p>

        <p class="inline-large-label button-height">
            {{ Form::label('description', 'Description:', array('class' => 'label')) }}
            {{ Form::textarea('description', null, array('id' => 'ckeditor')) }}
        </p>


        <p class="inline-large-label button-height">
            {{ Form::label('inicio', 'Inicio:', array('class' => 'label')) }}
                            <p class="button-height">
                                <span class="input">
                                    <span class="icon-calendar"></span>
                                   <input type="text" id="example" />
                                </span>
                            </p>

                            <div id="inline-datepicker"></div>
       

        </p>

        <p class="inline-large-label button-height">
            {{ Form::label('cost', 'Cost:', array('class' => 'label')) }}
            {{ Form::text('cost', null, array('id' => 'cost')) }}
        </p>

  <p class="button-height">
    {{ Form::submit('Create', array('class' => 'btn')) }}
  </p>
{{ Form::close() }}

@if ($errors->any())
<ul>
  {{ implode('', $errors->all('<li class="error">:message</li>')) }}
</ul>
@endif
</div>
</div>

<!-- ckeditor -->
{{ HTML::script('js/libs/ckeditor/ckeditor.js'); }}
<!-- glDatePicker -->
{{ HTML::script('js/libs/glDatePicker/glDatePicker.min.js?v=1'); }}

<script type="text/javascript">

CKEDITOR.replace( 'ckeditor', {
    height: 9000
});
// Call template init (optional, but faster if called manually)
        $.template.init();


        $(window).load(function()
        {
            $('#example').glDatePicker();
        });

</script>
@stop