@if(!Auth::guest())
 <p>{{ Lang::get('messages.Hi') }} {{ Auth::user()->username }}</p>

 <p> {{ link_to_route('user.logout', Lang::get('messages.LOGOUT')) }} </p>
 
 <p> {{ link_to_route('users.create', Lang::get('messages.NEW USER')) }} </p>
 
 <p> {{ link_to_route('users.index', Lang::get('messages.LIST USER')) }} </p>
@endif
