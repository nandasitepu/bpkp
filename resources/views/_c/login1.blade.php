<br>
@if (Auth::guest())
  <div class="btn-group btn-group-justified hidden-xs">
    <a href="/login" class="btn btn-default btn-xs "><i class="fa fa-sign-in"></i>&nbsp; Login</a>
  </div>
  <div class="btn-group btn-group-justified visible-xs">
    <a href="/login" class="btn btn-default"><i class="fa fa-sign-in"></i>&nbsp; Login</a>
  </div>
@else
  <div class="dropdown">
      <a href="#" >
        <button type="button" class="btn btn-primary btn-block btn-sm " name="button">
          Login as | &nbsp; {{ Auth::user()->name }} &nbsp;
        </button>
      </a>
  </div>
  <div class="btn-group btn-group-justified hidden-xs">
    <a href="/dashboard" class="btn btn-default btn-sm">Dashboard</a>
    <a href="{{ url('/logout') }}" class="btn btn-info btn-sm">Logout</a>
  </div>
  <div class="btn-group btn-group-justified visible-xs">
    <a href="/dashboard" class="btn btn-default btn-sm">Dashboard</a>
    <a href="{{ url('/logout') }}" class="btn btn-info btn-sm">Logout</a>
  </div>
@endif
