<!DOCTYPE HTML>
<html lang="en-GB">
<head>
<meta charset="UTF-8">
<title>Intranet</title>

<link type="image/vnd.microsoft.icon" rel="shortcut icon" href="/img/favicon.ico">
<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600">

<!-- HTML::style('css/fullcalendar.css') 
HTML::style('css/fullcalendar.print.css') -->

<script src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
 <script>
$(document).ready(function() { 
  $("#receiver_id").select2();
  $("#role_id").select2();
  $("#zone_id").select2();
 });
</script>
</head>
<body>
<div class="navbar navbar-inverse navbar-fixed-top">
  <div class="navbar-inner">
    <div class="container">
	  <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
		<i class="icon-cog"></i>
	  </a>

      @if(Session::has('flash_message'))
        <div id="flash_message">{{ Session::get('flash_message') }}</div>
      @endif

      @include('templates.menu')

   	  @yield('content')
		
	</div> <!-- /container -->
		
  </div> <!-- /navbar-inner -->
	
</div> <!-- /navbar -->
    


{{ HTML::script('js/dropzone.js') }}

@yield('scripts')

<a style="display: none;" href="#top" id="back-to-top"><i class="icon-chevron-up"></i></a>
</body>
</html>
