@if(!Auth::guest())

  <p>{{ Lang::get('messages.Hi') }} {{ Auth::user()->username }}</p>

  <p> {{ Auth::user()->role["name"] }} {{ Lang::get('messages.member') }}</p>

 <p> {{ link_to_route('logout_user', Lang::get('messages.LOGOUT')) }} </p>
 <p> {{ link_to_route('new_message', Lang::get('messages.NEW MESSAGE')) }} </p>

  @if (Auth::user()->role["name"] == "admin")
    <p> {{ link_to_route('new_user', Lang::get('messages.NEW USER')) }} </p>
  <p> {{ link_to_route('list_user', Lang::get('messages.LIST USER')) }} </p>
  @endif

  <p> {{ link_to_route('sended_messages', Lang::get('messages.SENDED MESSAGES')) }} </p>
  <p> {{ link_to_route('index_message', Lang::get('messages.RECEIVED MESSAGES')) }} </p>

@endif
