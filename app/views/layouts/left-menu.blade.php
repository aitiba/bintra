 <li class="current"><a href="home.html" class="shortcut-dashboard" title="Dashboard">Dashboard</a></li>
 <li><a href="/bintra/public/projects" class="shortcut-messages" title="Proyectos">Proyectos</a></li>
 <li><a href="piztu.html" class="shortcut-messages" title="Piztu">Piztu</a></li>
 <li><a href="irunerria.html" class="shortcut-agenda" title="Irunerria">Irunerria</a></li>
 <li><a href="swingerlabs.html" class="shortcut-medias" title="SwingerLabs">SwingerLabs</a></li>
 <li><a href="sliders.html" class="shortcut-stats" title="Horas">Horas</a></li>
 @if (Auth::user()->group->name == 'admin')
   <li><a href="/bintra/public/groups" class="shortcut-stats" title="Grupos">Grupos</a></li>
   <li><a href="/bintra/public/perms" class="shortcut-stats" title="Permisos">Permisos</a></li>
   <li class="at-bottom"><a href="/bintra/public/users" class="shortcut-contacts" title="User">User</a></li>
 @endif