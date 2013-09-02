<!DOCTYPE html>

<!--[if IEMobile 7]><html class="no-js iem7 oldie"><![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html class="no-js ie7 oldie" lang="en"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html class="no-js ie8 oldie" lang="en"><![endif]-->
<!--[if (IE 9)&!(IEMobile)]><html class="no-js ie9" lang="en"><![endif]-->
<!--[if (gt IE 9)|(gt IEMobile 7)]><!--><html class="no-js" lang="en"><!--<![endif]-->

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

  <title>Panel de control</title>
  <meta name="description" content="">
  <meta name="author" content="">

  <!-- http://davidbcalhoun.com/2010/viewport-metatag -->
  <meta name="HandheldFriendly" content="True">
  <meta name="MobileOptimized" content="320">

  <!-- http://www.kylejlarson.com/blog/2012/iphone-5-web-design/ -->
  <meta name="viewport" content="user-scalable=0, initial-scale=1.0">

  <!-- For all browsers -->
  {{ HTML::style('css/reset.css?v=1'); }}
  {{ HTML::style('css/style.css?v=1'); }}
  {{ HTML::style('css/colors.css?v=1'); }}
  {{ HTML::style('css/print.css?v=1', array('media' => 'print')); }}
  <!-- For progressively larger displays -->
  <link rel="stylesheet" media="only all and (min-width: 480px)" href="css/480.css?v=1">
  <link rel="stylesheet" media="only all and (min-width: 768px)" href="css/768.css?v=1">
  <link rel="stylesheet" media="only all and (min-width: 992px)" href="css/992.css?v=1">
  <link rel="stylesheet" media="only all and (min-width: 1200px)" href="css/1200.css?v=1">
  <!-- For Retina displays -->
  <link rel="stylesheet" media="only all and (-webkit-min-device-pixel-ratio: 1.5), only screen and (-o-min-device-pixel-ratio: 3/2), only screen and (min-device-pixel-ratio: 1.5)" href="css/2x.css?v=1">

  <!-- Webfonts -->
  <link href='http://fonts.googleapis.com/css?family=Open+Sans:300' rel='stylesheet' type='text/css'>

  <!-- Additional styles -->
  {{ HTML::style('css/styles/agenda.css?v=1'); }}
  {{ HTML::style('css/styles/dashboard.css?v=1'); }}
  {{ HTML::style('css/styles/form.css?v=1'); }}
  {{ HTML::style('css/styles/modal.css?v=1'); }}
  {{ HTML::style('css/styles/progress-slider.css?v=1'); }}
  {{ HTML::style('css/styles/switches.css?v=1'); }}
  {{ HTML::style('css/styles/table.css?v=1'); }}

  {{ HTML::style('css/fullcalendar.css?v=1'); }}
  {{ HTML::style('css/fullcalendar.print.css?v=1', array('media' => 'print')); }}
  <style type="text/css">
    .dark-text-bevel, .calendar-menu > li, li.calendar-menu, .message-menu > li, li.message-menu {
      text-shadow: none;
    }
    .margintop {
       margin-top:-50px;
    }
    a, a:active, a:hover {
      color:#fff;
    }
    html .fc, .fc table {
      font-size: 1.1em;
    }
  </style>
  <!-- JavaScript at bottom except for Modernizr -->
  <script src="js/libs/modernizr.custom.js"></script>

  <!-- For Modern Browsers -->
  <link rel="shortcut icon" href="img/favicons/favicon.png">
  <!-- For everything else -->
  <link rel="shortcut icon" href="img/favicons/favicon.ico">

  <!-- iOS web-app metas -->
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-status-bar-style" content="black">

  <!-- iPhone ICON -->
  <link rel="apple-touch-icon" href="img/favicons/apple-touch-icon.png" sizes="57x57">
  <!-- iPad ICON -->
  <link rel="apple-touch-icon" href="img/favicons/apple-touch-icon-ipad.png" sizes="72x72">
  <!-- iPhone (Retina) ICON -->
  <link rel="apple-touch-icon" href="img/favicons/apple-touch-icon-retina.png" sizes="114x114">
  <!-- iPad (Retina) ICON -->
  <link rel="apple-touch-icon" href="img/favicons/apple-touch-icon-ipad-retina.png" sizes="144x144">

  <!-- iPhone SPLASHSCREEN (320x460) -->
  <link rel="apple-touch-startup-image" href="img/splash/iphone.png" media="(device-width: 320px)">
  <!-- iPhone (Retina) SPLASHSCREEN (640x960) -->
  <link rel="apple-touch-startup-image" href="img/splash/iphone-retina.png" media="(device-width: 320px) and (-webkit-device-pixel-ratio: 2)">
  <!-- iPhone 5 SPLASHSCREEN (640×1096) -->
  <link rel="apple-touch-startup-image" href="img/splash/iphone5.png" media="(device-height: 568px) and (-webkit-device-pixel-ratio: 2)">
  <!-- iPad (portrait) SPLASHSCREEN (748x1024) -->
  <link rel="apple-touch-startup-image" href="img/splash/ipad-portrait.png" media="(device-width: 768px) and (orientation: portrait)">
  <!-- iPad (landscape) SPLASHSCREEN (768x1004) -->
  <link rel="apple-touch-startup-image" href="img/splash/ipad-landscape.png" media="(device-width: 768px) and (orientation: landscape)">
  <!-- iPad (Retina, portrait) SPLASHSCREEN (2048x1496) -->
  <link rel="apple-touch-startup-image" href="img/ipad-portrait-retina.png" media="(device-width: 1536px) and (orientation: portrait) and (-webkit-min-device-pixel-ratio: 2)">
  <!-- iPad (Retina, landscape) SPLASHSCREEN (1536x2008) -->
  <link rel="apple-touch-startup-image" href="img/ipad-landscape-retina.png" media="(device-width: 1536px)  and (orientation: landscape) and (-webkit-min-device-pixel-ratio: 2)">

  <!-- Microsoft clear type rendering -->
  <meta http-equiv="cleartype" content="on">

  <!-- IE9 Pinned Sites: http://msdn.microsoft.com/en-us/library/gg131029.aspx -->
  <meta name="application-name" content="Developr Admin Skin">
  <meta name="msapplication-tooltip" content="Cross-platform admin template.">
  <meta name="msapplication-starturl" content="http://www.display-inline.fr/demo/developr">
  <!-- These custom tasks are examples, you need to edit them to show actual pages -->
  <!--<meta name="msapplication-task" content="name=Agenda;action-uri=http://www.display-inline.fr/demo/developr/agenda.html;icon-uri=http://www.display-inline.fr/demo/developr/img/favicons/favicon.ico">
  <meta name="msapplication-task" content="name=My profile;action-uri=http://www.display-inline.fr/demo/developr/profile.html;icon-uri=http://www.display-inline.fr/demo/developr/img/favicons/favicon.ico">-->
</head>

<body class="clearfix with-menu with-shortcuts">

  <!-- Prompt IE 6 users to install Chrome Frame -->
  <!--[if lt IE 7]><p class="message red-gradient simpler">Your browser is <em>ancient!</em> <a href="http://browsehappy.com/">Upgrade to a different browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to experience this site.</p><![endif]-->

  <!-- Title bar -->
  <header role="banner" id="title-bar">
    <h2>Burujabetech    ::     Admin panel</h2>
  </header>

  <!-- Button to open/hide menu -->
  <a href="#" id="open-menu"><span>Menu</span></a>

  <!-- Button to open/hide shortcuts -->
  <a href="#" id="open-shortcuts"><span class="icon-thumbs"></span></a>

  <!-- Main content -->
  <section role="main" id="main">

    <noscript class="message black-gradient simpler">Your browser does not support JavaScript! Some features won't work as expected...</noscript>

    <hgroup id="main-title" class="thin">
      <h1>Panel</h1>
      <h2>sep <strong>01</strong></h2>
    </hgroup>

    <div class="dashboard">
      @include('templates.dashboard')
    </div>

  </section>
  <!-- End main content -->

  <!-- Side tabs shortcuts -->
  <ul id="shortcuts" role="complementary" class="children-tooltip tooltip-right">
   @include('templates.left-menu')
  </ul>

  <!-- Side tabs shortcuts with legends under the icons -->
  <!-- <ul id="shortcuts" role="complementary" class="children-tooltip tooltip-right with-legend">
    <li class="current"><a href="./" class="shortcut-dashboard" title="Dashboard"><span class="shortcut-legend">Dashboard</span></a></li>
    <li><a href="inbox.html" class="shortcut-messages" title="Messages"><span class="shortcut-legend">Messages</span></a></li>
    <li><a href="agenda.html" class="shortcut-agenda" title="Agenda"><span class="shortcut-legend">Agenda</span></a></li>
    <li><a href="tables.html" class="shortcut-contacts" title="Contacts"><span class="shortcut-legend">Contacts</span></a></li>
    <li><a href="explorer.html" class="shortcut-medias" title="Medias"><span class="shortcut-legend">Medias</span></a></li>
    <li><a href="sliders.html" class="shortcut-stats" title="Stats"><span class="shortcut-legend">Stats</span></a></li>
    <li class="at-bottom"><a href="form.html" class="shortcut-settings" title="Settings"><span class="shortcut-legend">Settings</span></a></li>
    <li><span class="shortcut-notes" title="Notes"><span class="shortcut-legend">Notes</span></span></li>
  </ul> -->

  <!-- Sidebar/drop-down menu -->
  <section id="menu" role="complementary">
   @include('templates.right-menu')
  </section>
  <!-- End sidebar/drop-down menu -->

  <!-- JavaScript at the bottom for fast page loading -->

  <!-- Scripts -->
  <script src="js/libs/jquery-1.9.1.min.js"></script>
  <script src="js/setup.js"></script>

  <!-- Template functions -->
  <script src="js/developr.input.js"></script>
  <script src="js/developr.message.js"></script>
  <script src="js/developr.modal.js"></script>
  <script src="js/developr.navigable.js"></script>
  <script src="js/developr.notify.js"></script>
  <script src="js/developr.scroll.js"></script>
  <script src="js/developr.progress-slider.js"></script>
  <script src="js/developr.tooltip.js"></script>
  <script src="js/developr.confirm.js"></script>
  <script src="js/developr.agenda.js"></script>
  <script src="js/developr.tabs.js"></script>   <!-- Must be loaded last -->

  <!-- Tinycon -->
  <script src="js/libs/tinycon.min.js"></script>

  <script src="js/jquery-ui-1.10.3.custom.min.js"></script>
  <script src="js/fullcalendar.min.js"></script>

  <script>

    // Call template init (optional, but faster if called manually)
    $.template.init();

    // Favicon count
    Tinycon.setBubble(2);

    // If the browser support the Notification API, ask user for permission (with a little delay)
    if (notify.hasNotificationAPI() && !notify.isNotificationPermissionSet())
    {
      setTimeout(function()
      {
        notify.showNotificationPermission('Your browser supports desktop notification, click here to enable them.', function()
        {
          // Confirmation message
          if (notify.hasNotificationPermission())
          {
            notify('Notifications API enabled!', 'You can now see notifications even when the application is in background', {
              icon: 'img/demo/icon.png',
              system: true
            });
          }
          else
          {
            notify('Notifications API disabled!', 'Desktop notifications will not be used.', {
              icon: 'img/demo/icon.png'
            });
          }
        });

      }, 2000);
    }

    /*
     * Handling of 'other actions' menu
     */

    var otherActions = $('#otherActions'),
      current = false;

    // Other actions
    $('.list .button-group a:nth-child(2)').menuTooltip('Loading...', {

      classes: ['with-mid-padding'],
      ajax: 'ajax-demo/tooltip-content.html',

      onShow: function(target)
      {
        // Remove auto-hide class
        target.parent().removeClass('show-on-parent-hover');
      },

      onRemove: function(target)
      {
        // Restore auto-hide class
        target.parent().addClass('show-on-parent-hover');
      }
    });

    // Delete button
    $('.list .button-group a:last-child').data('confirm-options', {

      onShow: function()
      {
        // Remove auto-hide class
        $(this).parent().removeClass('show-on-parent-hover');
      },

      onConfirm: function()
      {
        // Remove element
        $(this).closest('li').fadeAndRemove();

        // Prevent default link behavior
        return false;
      },

      onRemove: function()
      {
        // Restore auto-hide class
        $(this).parent().addClass('show-on-parent-hover');
      }

    });

    // Demo modal
    function openModal()
    {
      $.modal({
        content: '<p>This is an example of modal window. You can open several at the same time (click links below!), move them and resize them.</p>'+
              '<p>The plugin provides several other functions to control them, try below:</p>'+
              '<ul class="simple-list with-icon">'+
              '    <li><a href="javascript:void(0)" onclick="openModal()">Open new blocking modal</a></li>'+
              '    <li><a href="javascript:void(0)" onclick="$.modal.alert(\'This is a non-blocking modal, you can switch between me and the other modal\', { blocker: false })">Open non-blocking modal</a></li>'+
              '    <li><a href="javascript:void(0)" onclick="$(this).getModalWindow().setModalTitle(\'\')">Remove title</a></li>'+
              '    <li><a href="javascript:void(0)" onclick="$(this).getModalWindow().setModalTitle(\'New title\')">Change title</a></li>'+
              '    <li><a href="javascript:void(0)" onclick="$(this).getModalWindow().loadModalContent(\'ajax-demo/auto-setup.html\')">Load Ajax content</a></li>'+
              '</ul>',
        title: 'Example modal window',
        width: 300,
        scrolling: false,
        actions: {
          'Close' : {
            color: 'red',
            click: function(win) { win.closeModal(); }
          },
          'Center' : {
            color: 'green',
            click: function(win) { win.centerModal(true); }
          },
          'Refresh' : {
            color: 'blue',
            click: function(win) { win.closeModal(); }
          },
          'Abort' : {
            color: 'orange',
            click: function(win) { win.closeModal(); }
          }
        },
        buttons: {
          'Close': {
            classes:  'huge blue-gradient glossy full-width',
            click:    function(win) { win.closeModal(); }
          }
        },
        buttonsLowPadding: true
      });
    };

    // Demo alert
    function openAlert()
    {
      $.modal.alert('This is an alert message', {
        buttons: {
          'Thanks, captain obvious': {
            classes:  'huge blue-gradient glossy full-width',
            click:    function(win) { win.closeModal(); }
          }
        }
      });
    };

    // Demo prompt
    function openPrompt()
    {
      var cancelled = false;

      $.modal.prompt('Please enter a value between 5 and 10:', function(value)
      {
        value = parseInt(value);
        if (isNaN(value) || value < 5 || value > 10)
        {
          $(this).getModalContentBlock().message('Please enter a correct value', { append: false, classes: ['red-gradient'] });
          return false;
        }

        $.modal.alert('Value: <strong>'+value+'</strong>');

      }, function()
      {
        if (!cancelled)
        {
          $.modal.alert('Oh, come on....');
          cancelled = true;
          return false;
        }
      });
    };

    // Demo confirm
    function openConfirm()
    {
      $.modal.confirm('Challenge accepted?', function()
      {
        $.modal.alert('Me gusta!');

      }, function()
      {
        $.modal.alert('Meh.');
      });
    };

    /*
     * Agenda scrolling
     * This example shows how to remotely control an agenda. most of the time, the built-in controls
     * using headers work just fine
     */

      // Days
    var daysName = ['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'],

      // Name display
      agendaDay = $('#agenda-day'),

      // Agenda scrolling
      agenda = $('#agenda').scrollAgenda({
        first: 2,
        onRangeChange: function(start, end)
        {
          if (start != end)
          {
            agendaDay.text(daysName[start].substr(0, 3)+' - '+daysName[end].substr(0, 3));
          }
          else
          {
            agendaDay.text(daysName[start]);
          }
        }
      });

    // Remote controls
    $('#agenda-previous').click(function(event)
    {
      event.preventDefault();
      agenda.scrollAgendaToPrevious();
    });
    $('#agenda-today').click(function(event)
    {
      event.preventDefault();
      agenda.scrollAgendaFirstColumn(2);
    });
    $('#agenda-next').click(function(event)
    {
      event.preventDefault();
      agenda.scrollAgendaToNext();
    });

    // Demo loading modal
    function openLoadingModal()
    {
      var timeout;

      $.modal({
        contentAlign: 'center',
        width: 240,
        title: 'Loading',
        content: '<div style="line-height: 25px; padding: 0 0 10px"><span id="modal-status">Contacting server...</span><br><span id="modal-progress">0%</span></div>',
        buttons: {},
        scrolling: false,
        actions: {
          'Cancel': {
            color:  'red',
            click:  function(win) { win.closeModal(); }
          }
        },
        onOpen: function()
        {
            // Progress bar
          var progress = $('#modal-progress').progress(100, {
              size: 200,
              style: 'large',
              barClasses: ['anthracite-gradient', 'glossy'],
              stripes: true,
              darkStripes: false,
              showValue: false
            }),

            // Loading state
            loaded = 0,

            // Window
            win = $(this),

            // Status text
            status = $('#modal-status'),

            // Function to simulate loading
            simulateLoading = function()
            {
              ++loaded;
              progress.setProgressValue(loaded+'%', true);
              if (loaded === 100)
              {
                progress.hideProgressStripes().changeProgressBarColor('green-gradient');
                status.text('Done!');
                /*win.getModalContentBlock().message('Content loaded!', {
                  classes: ['green-gradient', 'align-center'],
                  arrow: 'bottom'
                });*/
                setTimeout(function() { win.closeModal(); }, 1500);
              }
              else
              {
                if (loaded === 1)
                {
                  status.text('Loading data...');
                  progress.changeProgressBarColor('blue-gradient');
                }
                else if (loaded === 25)
                {
                  status.text('Loading assets (1/3)...');
                }
                else if (loaded === 45)
                {
                  status.text('Loading assets (2/3)...');
                }
                else if (loaded === 85)
                {
                  status.text('Loading assets (3/3)...');
                }
                else if (loaded === 92)
                {
                  status.text('Initializing...');
                }
                timeout = setTimeout(simulateLoading, 50);
              }
            };

          // Start
          timeout = setTimeout(simulateLoading, 2000);
        },
        onClose: function()
        {
          // Stop simulated loading if needed
          clearTimeout(timeout);
        }
      });
    };

  </script>
  <script type="text/javascript">
    
    /*
      jQuery document ready
    */
    
    $(document).ready(function()
    {
      /*
        date store today date.
        d store today date.
        m store current month.
        y store current year.
      */
      var date = new Date();
      var d = date.getDate();
      var m = date.getMonth();
      var y = date.getFullYear();
      
      /*
        Initialize fullCalendar and store into variable.
        Why in variable?
        Because doing so we can use it inside other function.
        In order to modify its option later.
      */
      
      var calendar = $('#calendar').fullCalendar(
      {
        /*
          header option will define our calendar header.
          left define what will be at left position in calendar
          center define what will be at center position in calendar
          right define what will be at right position in calendar
        */
        header:
        {
          left: 'prev,next today',
          center: 'title',
          //right: 'month,agendaWeek,agendaDay'
        },
        /*
          defaultView option used to define which view to show by default,
          for example we have used agendaWeek.
        */
        defaultView: 'month',
        /*
          selectable:true will enable user to select datetime slot
          selectHelper will add helpers for selectable.
        */
        selectable: true,
        selectHelper: true,
        /*
          when user select timeslot this option code will execute.
          It has three arguments. Start,end and allDay.
          Start means starting time of event.
          End means ending time of event.
          allDay means if events is for entire day or not.
        */
        select: function(start, end, allDay)
        {
          /*
            after selection user will be promted for enter title for event.
          */
          var title = prompt('Event Title:');
          /*
            if title is enterd calendar will add title and event into fullCalendar.
          */
          if (title)
          {
            calendar.fullCalendar('renderEvent',
              {
                title: title,
                start: start,
                end: end,
                allDay: allDay
              },
              true // make the event "stick"
            );
          }
          calendar.fullCalendar('unselect');
        },
        /*
          editable: true allow user to edit events.
        */
        editable: true,
        /*
          events is the main option for calendar.
          for demo we have added predefined events in json object.
        */
        events: [
          {
            title: '&nbsp;<span class="icon-bell" title="Fin del proyecto"></span>&nbsp;&nbsp;Fase 1&nbsp;&nbsp;<span class="tag"><a href="#">Piztu</a></span>&nbsp;<span class="tag green-bg"><a href="#">Fase 1</a></span>',
            start: new Date(y, m, 1)
          },
          {
            title: '&nbsp;<span class="icon-bell"></span>&nbsp;&nbsp;Fase 3&nbsp;&nbsp;<span class="tag"><a href="#">Irunerria</a></span>&nbsp;<span class="tag green-bg"><a href="#">Fase 1</a></span>',
            start: new Date(y, m, 1)
          },
          {
            title: '&nbsp;<span class="icon-graduation-cap"></span>&nbsp;&nbsp;<span class="tag grey-bg"><a href="#">Hackmeeting</a></span>',
            start: new Date(y, m, d-5),
            end: new Date(y, m, d-2)
          },
          {
            title: '&nbsp;<span class="icon-graduation-cap"></span>&nbsp;&nbsp;<span class="tag grey-bg"><a href="#">Drupal day</a></span>',
            start: new Date(y, m, d+10)
          },
          {
            title: 'Lunch',
            start: new Date(y, m, d, 12, 0),
            end: new Date(y, m, d, 14, 0),
            allDay: false
          },
          {
            title: '&nbsp;<span class="icon-play" title="Fin del proyecto"></span>&nbsp;&nbsp;<span class="tag"><a href="#">Intranet - paco</a></span>&nbsp;<span class="tag green-bg"><a href="#">Fase 1</a></span>',
            start: new Date(y, m, d+9),
            end: new Date(y, m, d+9)
          }
        ],
        eventRender: function (event, element) {
            element.find('.fc-event-title').html(event.title);
        }
      });
      
    });

  </script>

  <!-- Charts library -->
  <!-- Load the AJAX API -->
  <script src="http://www.google.com/jsapi"></script>
  <script>

    /*
     * This script is dedicated to building and refreshing the demo chart
     * Remove if not needed
     */

    // Demo chart
    var chartInit = false,
      drawVisitorsChart = function()
      {
        // Create our data table.
        var data = new google.visualization.DataTable();
        var raw_data = [['Website', 50, 73, 104, 129, 146, 176, 139, 149, 218, 194, 96, 53],
                ['Shop', 82, 77, 98, 94, 105, 81, 104, 104, 92, 83, 107, 91],
                ['Forum', 50, 39, 39, 41, 47, 49, 59, 59, 52, 64, 59, 51],
                ['Others', 45, 35, 35, 39, 53, 76, 56, 59, 48, 40, 48, 21]];

        var months = ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'];

        data.addColumn('string', 'Month');
        for (var i = 0; i < raw_data.length; ++i)
        {
          data.addColumn('number', raw_data[i][0]);
        }

        data.addRows(months.length);

        for (var j = 0; j < months.length; ++j)
        {
          data.setValue(j, 0, months[j]);
        }
        for (var i = 0; i < raw_data.length; ++i)
        {
          for (var j = 1; j < raw_data[i].length; ++j)
          {
            data.setValue(j-1, i+1, raw_data[i][j]);
          }
        }

        // Create and draw the visualization.
        // Learn more on configuration for the LineChart: http://code.google.com/apis/chart/interactive/docs/gallery/linechart.html
        var div = $('#demo-chart'),
          divWidth = div.width();
        new google.visualization.LineChart(div.get(0)).draw(data, {
          title: 'Monthly unique visitors count',
          width: divWidth,
          height: $.template.mediaQuery.is('mobile') ? 180 : 265,
          legend: 'right',
          yAxis: {title: '(thousands)'},
          backgroundColor: ($.template.ie7 || $.template.ie8) ? '#494C50' : 'transparent',  // IE8 and lower do not support transparency
          legendTextStyle: { color: 'white' },
          titleTextStyle: { color: 'white' },
          hAxis: {
            textStyle: { color: 'white' }
          },
          vAxis: {
            textStyle: { color: 'white' },
            baselineColor: '#666666'
          },
          chartArea: {
            top: 35,
            left: 30,
            width: divWidth-40
          },
          legend: 'bottom'
        });

        // Message only when resizing
        if (chartInit)
        {
          notify('Chart resized', 'The width change event has been triggered.', {
            icon: 'img/demo/icon.png'
          });
        }

        // Ready
        chartInit = true;
      };

    // Load the Visualization API and the piechart package.
    google.load('visualization', '1', {
      'packages': ['corechart']
    });

    // Set a callback to run when the Google Visualization API is loaded.
    google.setOnLoadCallback(drawVisitorsChart);

    // Watch for block resizing
    $('#demo-chart').widthchange(drawVisitorsChart);

    // Respond.js hook (media query polyfill)
    $(document).on('respond-ready', drawVisitorsChart);

  </script>
</body>
</html>