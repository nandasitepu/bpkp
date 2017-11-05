@if (Auth::guest())
  <div class="btn-group btn-group-justified">
    <a href="spa" class="btn btn-primary btn-xs "><i class="fa fa-user-secret"></i>&nbsp; Tamu</a>
    <a href="{{route('login')}}" class="btn btn-success btn-xs "><i class="fa fa-user-circle-o"></i>&nbsp; Pegawai</a>
    <a href="{{route('admin.login')}}" class="btn btn-default btn-xs "><i class="fa fa-android"></i>&nbsp; Admin</a>
  </div>
@endif

@if (Auth::guard('web')->check() )
  <div class="dropdown">
      <a href="#" >
        <button type="button" class="btn btn-default btn-block btn-sm " name="button">
          Login as USER| &nbsp; {{ Auth::user()->name }} &nbsp; <i class="fa fa-fw fa-google-plus-square"></i>
        </button>
      </a>
  </div>
  <div class="btn-group btn-group-justified hidden-xs">
    <a href="{{ route('user.dashboard') }}" class="btn btn-primary btn-sm"><i class="fa fa-fw fa-dashboard"></i>&nbsp;U-Dashboard</a>
    <a href="{{ route('user.logout') }}" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-sign-out"></i>&nbsp;Logout</a>
  </div>
  <div class="btn-group btn-group-justified visible-xs">
    <a href="{{ route('user.dashboard') }}" class="btn btn-success btn-sm">Dashboard</a>
    <a href="/spa" class="btn btn-default btn-sm">SPA</a>
    <a href="{{ route('user.logout') }}" class="btn btn-info btn-sm">Logout</a>
  </div>
@endif

@if (Auth::guard('admin')->check()  )
  <div class="dropdown">
      <a href="#" >
        <button type="button" class="btn btn-default btn-block btn-sm " name="button">
          <b>Login as ADMIN</b> | &nbsp; {{ App\Admin::find(1)->name}} &nbsp; <i class="fa fa-fw fa-google-plus-square"></i>
        </button>
      </a>
  </div>
  <div class="btn-group btn-group-justified hidden-xs">
    <a href="{{ route('admin.dashboard') }}" class="btn btn-primary btn-sm"><i class="fa fa-fw fa-dashboard"></i>&nbsp;A-Dashboard</a>
    <a href="{{ route('admin.logout') }}" class="btn btn-success btn-sm"><i class="fa fa-fw fa-sign-out"></i>&nbsp;Logout</a>
  </div>
  <div class="btn-group btn-group-justified visible-xs">
    <a href="{{ route('admin.dashboard') }}" class="btn btn-success btn-sm">Dashboard</a>
    <a href="/spa" class="btn btn-default btn-sm">SPA</a>
    <a href="{{ route('admin.logout') }}" class="btn btn-info btn-sm">Logout</a>
  </div>
@endif
