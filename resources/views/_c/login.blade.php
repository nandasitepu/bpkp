<div class="col-md-12">
  <div class=" text-center">

    <div class="panel panel-default">
    @if (Auth::guest())
      <div class="panel-body">
        <div class="btn-group btn-group-xs btn-group-justified">
          <a href="{{route('login')}}" class="btn btn-xs btn-success"><i class="fa fa-users"></i>&nbsp; Tamu</a>
          <a href="{{route('login')}}" class="btn btn-xs btn-primary"><i class="fa fa-user"></i>&nbsp; Pegawai</a>
          <a href="{{route('login')}}" class="btn btn-xs btn-default"><i class="fa fa-android"></i>&nbsp; Admin</a>
        </div>
      </div>
    @else
      <div class="dropdown">
          <a href="#" >
            <button type="button" class="btn btn-primary btn-block btn-sm " name="button">
              Login as | &nbsp; {{ Auth::user()->name }} &nbsp;
            </button>
          </a>
      </div>
      <div class="btn-group btn-group-justified hidden-xs">
        <a href="/dashboard" class="btn btn-default btn-sm">Dashboard</a>
        <a href="/spa" class="btn btn-success btn-sm">SPA</a>
        <a href="{{ url('/logout') }}" class="btn btn-info btn-sm">Logout</a>
      </div>
      <div class="btn-group btn-group-justified visible-xs">
        <a href="/dashboard" class="btn btn-success btn-sm">Dashboard</a>
          <a href="/spa" class="btn btn-default btn-sm">SPA</a>
        <a href="{{ url('/logout') }}" class="btn btn-info btn-sm">Logout</a>
      </div>
    @endif

    </div>
  </div>
</div>
