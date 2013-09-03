
    <!-- This wrapper is used by several responsive layouts -->
    <div id="menu-content">

      <header>
        Administrator
      </header>

      <div id="profile">
        {{ HTML::image('img/user.png', null, array('width' => '64', 'height' => '64', 'alt' => 'User name', 'class' => 'user-icon')); }}
       Hello
        <span class="name">John <b>Doe</b></span>
      </div>

      <!-- By default, this section is made for 4 icons, see the doc to learn how to change this, in "basic markup explained" -->
      <ul id="access" class="children-tooltip">
        <li><a href="inbox.html" title="Messages"><span class="icon-inbox"></span><span class="count">2</span></a></li>
        <li><a href="calendars.html" title="Calendar"><span class="icon-calendar"></span></a></li>
        <li><a href="login.html" title="Profile"><span class="icon-user"></span></a></li>
        <li>{{ link_to_route('user.logout', 'Logout' ) }} <span class="icon-logout"></span></li>
      </ul>

      <!--<section class="navigable">
        <ul class="big-menu">
          <li class="with-right-arrow">
            <span><span class="list-count">11</span>Main styles</span>
            <ul class="big-menu">
              <li><a href="typography.html">Typography</a></li>
              <li><a href="columns.html">Columns</a></li>
              <li><a href="tables.html">Tables</a></li>
              <li><a href="colors.html">Colors &amp; backgrounds</a></li>
              <li><a href="icons.html">Icons</a></li>
              <li><a href="files.html">Files &amp; Gallery</a></li>
              <li class="with-right-arrow">
                <span><span class="list-count">4</span>Forms &amp; buttons</span>
                <ul class="big-menu">
                  <li><a href="buttons.html">Buttons</a></li>
                  <li><a href="form.html">Form elements</a></li>
                  <li><a href="textareas.html">Textareas &amp; WYSIWYG</a></li>
                  <li><a href="form-layouts.html">Form layouts</a></li>
                  <li><a href="wizard.html">Wizard</a></li>
                </ul>
              </li>
              <li class="with-right-arrow">
                <span><span class="list-count">2</span>Agenda &amp; Calendars</span>
                <ul class="big-menu">
                  <li><a href="agenda.html">Agenda</a></li>
                  <li><a href="calendars.html">Calendars</a></li>
                </ul>
              </li>
              <li><a href="blocks.html">Blocks &amp; infos</a></li>
            </ul>
          </li>
          <li class="with-right-arrow">
            <span><span class="list-count">8</span>Main features</span>
            <ul class="big-menu">
              <li><a href="auto-setup.html">Automatic setup</a></li>
              <li><a href="responsive.html">Responsiveness</a></li>
              <li><a href="tabs.html">Tabs</a></li>
              <li><a href="sliders.html">Slider &amp; progress</a></li>
              <li><a href="modals.html">Modal windows</a></li>
              <li class="with-right-arrow">
                <span><span class="list-count">3</span>Messages &amp; notifications</span>
                <ul class="big-menu">
                  <li><a href="messages.html">Messages</a></li>
                  <li><a href="notifications.html">Notifications</a></li>
                  <li><a href="tooltips.html">Tooltips</a></li>
                </ul>
              </li>
            </ul>
          </li>
          <li class="with-right-arrow">
            <a href="ajax-demo/submenu.html" class="navigable-ajax" title="Menu title">With ajax sub-menu</a>
          </li>
        </ul>
      </section>-->

      <ul class="unstyled-list">
        <!-- today task -->
        <li class="title-menu">Today's task</li>
        <li>
          <ul class="calendar-menu">
            <li>
              <a href="#" title="See task">
                <time datetime="2013-09-01"><b>1</b> Sep</time>
                <small class="green">10:30</small>
                Añadir i18n
              </a>
              <p>
                <span class="tag"><a href="#">Piztu</a></span>
                <span class="tag green-bg"><a href="#">Fase 1</a></span>
              </p>

            </li>
            <li>
              <p>
                <a href="#" title="See event">
                  <time datetime="2011-09"><b>Sep</b></time>
                </a>
                <br />&nbsp;&nbsp;&nbsp;&nbsp;
                <span class="tag"><a href="#">Irunerria</a></span>
                <span class="tag green-bg"><a href="#">Mantenimiento</a></span>
              </p>
            </li>
          </ul>
        </li>

        <!-- Milestones -->
        <li class="title-menu">Milestones</li>
        <li>
          <ul class="calendar-menu">
            <li>
              <a href="#" title="See task">
                <time datetime="2013-09-10"><b>10</b> Sep</time>
              </a>
              <p class="margintop">
                <span class="tag"><a href="#">Piztu</span></a><br /><br />
                <span class="tag green-bg"><a href="#">Fase 1</a></span>
                <span class="tag red-bg">67%</span>
              </p>

            </li>
            <li>
              <a href="#" title="See task">
                <time datetime="2013-09-15"><b>15</b> Sep</time>
              </a>
              <p class="margintop">
                <span class="tag"><a href="#">SwingerLabs</span></a><br /><br />
                <span class="tag green-bg"><a href="#">Fase 4</a></span>
                <span class="tag red-bg">98%</span>
              </p>
            </li>
          </ul>
        </li>

        <!-- Your projects -->
        <li class="title-menu">Your projects</li>
        <li>
          <ul class="calendar-menu" style="margin-bottom:-20px">
            <li>
                <span class="tag"><a href="#">Piztu</a></span>
                <span class="tag"><a href="#">Irunerria</a></span>
                <span class="tag"><a href="#">SwingerLabs</a></span>
            
            </li>
          </ul>
        </li>

        <!-- new messages -->
        <li class="title-menu">New messages</li>
        <li>
          <ul class="message-menu">
            <li>
              <span class="message-status">
                <a href="#" class="starred" title="Starred">Starred</a>
                <a href="#" class="new-message" title="Mark as read">New</a>
              </span>
              <span class="message-info">
                <span class="blue">17:12</span>
                <a href="#" class="attach" title="Download attachment">Attachment</a>
              </span>
              <a href="#" title="Read message">
                <strong class="blue">John Doe</strong><br>
                <strong>Mail subject</strong>
              </a>
            </li>
            <li>
              <a href="#" title="Read message">
                <span class="message-status">
                  <span class="unstarred">Not starred</span>
                  <span class="new-message">New</span>
                </span>
                <span class="message-info">
                  <span class="blue">15:47</span>
                </span>
                <strong class="blue">May Starck</strong><br>
                <strong>Mail subject a bit longer</strong>
              </a>
            </li>
            <li>
              <span class="message-status">
                <span class="unstarred">Not starred</span>
              </span>
              <span class="message-info">
                <span class="blue">15:12</span>
              </span>
              <strong class="blue">May Starck</strong><br>
              Read message
            </li>
          </ul>
        </li>
      </ul>

    </div>
    <!-- End content wrapper -->

    <!-- This is optional -->
    <!--<footer id="menu-footer">
      <p class="button-height">
        <input type="checkbox" name="auto-refresh" id="auto-refresh" checked="checked" class="switch float-right">
        <label for="auto-refresh">Auto-refresh</label>
      </p>
    </footer>-->

  </section>