<!DOCTYPE html>
<html lang="en">
<head>
  <!--
    Charisma v1.0.0

    Copyright 2012 Muhammad Usman
    Licensed under the Apache License v2.0
    http://www.apache.org/licenses/LICENSE-2.0

    http://usman.it
    http://twitter.com/halalit_usman
  -->
  <meta charset="utf-8">
  <title>Free HTML5 Bootstrap Admin Template</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Charisma, a fully featured, responsive, HTML5, Bootstrap admin template.">
  <meta name="author" content="Muhammad Usman">

  <!-- The styles -->
  <!-- The styles -->
  {{ HTML::style('/css/bootstrap-classic.css', array('id' => 'bs-css')); }}

  <link type="image/vnd.microsoft.icon" rel="shortcut icon" href="/img/favicon.ico">

  <!-- HTML::style('css/fullcalendar.css') 
HTML::style('css/fullcalendar.print.css') -->

  <!--<script src="http://code.jquery.com/jquery-1.10.2.min.js"></script>-->
  {{ HTML::style('css/bootstrap-responsive.css'); }}
  {{ HTML::style('css/charisma-app.css'); }}
  {{ HTML::style('css/jquery-ui-1.8.21.custom.css'); }}
  {{ HTML::style('css/fullcalendar.css'); }}
  {{ HTML::style('css/fullcalendar.print.css', array('media' => 'print')); }}
  {{ HTML::style('css/chosen.css'); }}
  {{ HTML::style('css/uniform.default.css'); }}
  {{ HTML::style('css/colorbox.css'); }}
  {{ HTML::style('css/uniform.default.css'); }}
  {{ HTML::style('css/colorbox.css'); }}
  {{ HTML::style('css/jquery.cleditor.css'); }}
  {{ HTML::style('css/jquery.noty.css'); }}
  {{ HTML::style('css/noty_theme_default.css'); }}
  {{ HTML::style('css/elfinder.min.css'); }}
  {{ HTML::style('css/elfinder.theme.css'); }}
  {{ HTML::style('css/jquery.iphone.toggle.css'); }}
  {{ HTML::style('css/opa-icons.css'); }}
  {{ HTML::style('css/uploadify.css'); }}
<!-- {{ HTML::script('js/jquery-1.8.2.min.js'); }} -->

  <!-- The HTML5 shim, for IE6-8 support of HTML5 elements -->
  <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->

  <!-- The fav icon -->
  <link rel="shortcut icon" href="img/favicon.ico">
</head>

  <div class="navbar">
    <div class="navbar-inner">
      <div class="container-fluid">
        <a class="btn btn-navbar" data-toggle="collapse" data-target=".top-nav.nav-collapse,.sidebar-nav.nav-collapse">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </a>
        <a class="brand" href="index.html"> 
          {{ HTML::image('img/logo20.png', 'Logo', array('id' => 'logo')) }}
          <span>Charisma</span>
        </a>
        
        <!-- theme selector starts -->
        <div class="btn-group pull-right theme-container" >
          <a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
            <i class="icon-tint"></i><span class="hidden-phone"> Change Theme / Skin</span>
            <span class="caret"></span>
          </a>
          <ul class="dropdown-menu" id="themes">
            <li><a data-value="classic" href="#"><i class="icon-blank"></i> Classic</a></li>
            <li><a data-value="cerulean" href="#"><i class="icon-blank"></i> Cerulean</a></li>
            <li><a data-value="cyborg" href="#"><i class="icon-blank"></i> Cyborg</a></li>
            <li><a data-value="redy" href="#"><i class="icon-blank"></i> Redy</a></li>
            <li><a data-value="journal" href="#"><i class="icon-blank"></i> Journal</a></li>
            <li><a data-value="simplex" href="#"><i class="icon-blank"></i> Simplex</a></li>
            <li><a data-value="slate" href="#"><i class="icon-blank"></i> Slate</a></li>
            <li><a data-value="spacelab" href="#"><i class="icon-blank"></i> Spacelab</a></li>
            <li><a data-value="united" href="#"><i class="icon-blank"></i> United</a></li>
          </ul>
        </div>
        <!-- theme selector ends -->
        
        <!-- user dropdown starts -->
        <div class="btn-group pull-right" >
          <a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
            <i class="icon-user"></i><span class="hidden-phone"> admin</span>
            <span class="caret"></span>
          </a>
          <ul class="dropdown-menu">
            <li><a href="#">Profile</a></li>
            <li class="divider"></li>
            <li><a href="login.html">Logout</a></li>
          </ul>
        </div>
        <!-- user dropdown ends -->
        
        <div class="top-nav nav-collapse">
          <ul class="nav">
            <li><a href="#">Visit Site</a></li>
            <li>
              <form class="navbar-search pull-left">
                <input placeholder="Search" class="search-query span2" name="query" type="text">
              </form>
            </li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>
  </div>

    @if(Session::has('flash_message'))
        <div id="flash_message">{{ Session::get('flash_message') }}</div>
    @endif

   <!-- @include('templates.menu')-->

    @yield('content')

 

  <!-- external javascript
  ================================================== -->
  <!-- Placed at the end of the document so the pages load faster -->

  <!-- jQuery -->
  {{ HTML::script('js/jquery-1.7.2.min.js'); }}
  <!-- jQuery UI -->
  {{ HTML::script('js/jquery-ui-1.8.21.custom.min.js'); }}
  <!-- transition / effect library -->
  {{ HTML::script('js/bootstrap-transition.js'); }}>
  <!-- alert enhancer library -->
  {{ HTML::script('js/bootstrap-alert.js'); }}>
  <!-- modal / dialog library -->
  {{ HTML::script('js/bootstrap-modal.js'); }}>
  <!-- custom dropdown library -->
  {{ HTML::script('js/bootstrap-dropdown.js'); }}>
  <!-- scrolspy library -->
  {{ HTML::script('js/bootstrap-scrollspy.js'); }}>
  <!-- library for creating tabs -->
  {{ HTML::script('js/bootstrap-tab.js'); }}>
  <!-- library for advanced tooltip -->
  {{ HTML::script('js/bootstrap-tooltip.js'); }}>
  <!-- popover effect library -->
  {{ HTML::script('js/bootstrap-popover.js'); }}>
  <!-- button enhancer library -->
  {{ HTML::script('js/bootstrap-button.js'); }}>
  <!-- accordion library (optional, not used in demo) -->
  {{ HTML::script('js/bootstrap-collapse.js'); }}>
  <!-- carousel slideshow library (optional, not used in demo) -->
  {{ HTML::script('js/bootstrap-carousel.js'); }}>
  <!-- autocomplete library -->
  {{ HTML::script('js/bootstrap-typeahead.js'); }}>
  <!-- tour library -->
  {{ HTML::script('js/bootstrap-tour.js'); }}>
  <!-- library for cookie management -->
  {{ HTML::script('js/jquery.cookie.js'); }}>
  <!-- calander plugin -->
  {{ HTML::script('js/fullcalendar.min.js'); }}>
  <!-- data table plugin -->
  {{ HTML::script('js/jquery.dataTables.min.js'); }}>

  <!-- chart libraries start -->
  {{ HTML::script('js/excanvas.js'); }}>
  {{ HTML::script('js/jquery.flot.min.js'); }}>
  {{ HTML::script('js/jquery.flot.pie.min.js'); }}>
  {{ HTML::script('js/jquery.flot.stack.js'); }}>
  {{ HTML::script('js/jquery.flot.resize.min.js'); }}>
  {{ HTML::script('js/bootstrap-modal.js'); }}>
  <!-- chart libraries end -->

  <!-- select or dropdown enhancer -->
  {{ HTML::script('js/jquery.chosen.min.js'); }}>
  <!-- checkbox, radio, and file input styler -->
  {{ HTML::script('js/jquery.uniform.min.js'); }}>
  <!-- plugin for gallery image view -->
  {{ HTML::script('js/jquery.colorbox.min.js'); }}>
  <!-- rich text editor library -->
  {{ HTML::script('js/jquery.cleditor.min.js'); }}>
  <!-- notification plugin -->
  {{ HTML::script('js/jquery.noty.js'); }}>
  <!-- file manager library -->
  {{ HTML::script('js/jquery.elfinder.min.js'); }}>
  <!-- star rating plugin -->
  {{ HTML::script('js/jquery.raty.min.js'); }}>
  <!-- for iOS style toggle switch -->
  {{ HTML::script('js/jquery.iphone.toggle.js'); }}>
  <!-- autogrowing textarea plugin -->
  {{ HTML::script('js/jquery.autogrow-textarea.js'); }}>
  <!-- multiple file upload plugin -->
  {{ HTML::script('js/jquery.uploadify-3.1.min.js'); }}>
  <!-- history.js for cross-browser state change on ajax -->
  {{ HTML::script('js/jquery.history.js'); }}>
  <!-- application script for Charisma demo -->
  <!--{{ HTML::script('js/charisma.js'); }}> -->
  
</body>
</html>
