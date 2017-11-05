
    <div class="text-center" style="border: 0px solid #ccc;margin: 5px;padding:20px" >
      <div class="btn-group btn-group-xs btn-group-justified">
          <a href="{{route('spa')}}" class="btn btn-xs btn-default"><i class="fa fa-fw fa-users"></i>&nbsp; &nbsp;<b>Tamu</b></a>
      </div>
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
          <a href="/spa" class="btn btn-info btn-sm"><i class="fa fa-fw fa-pagelines"></i>&nbsp;SPA</a>
          <a href="{{ route('user.logout') }}" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-sign-out"></i>&nbsp;Logout</a>
        </div>
        <div class="btn-group btn-group-justified visible-xs">
          <a href="{{ route('user.dashboard') }}" class="btn btn-success btn-sm">Dashboard</a>
          <a href="/spa" class="btn btn-default btn-sm">SPA</a>
          <a href="{{ route('user.logout') }}" class="btn btn-info btn-sm">Logout</a>
        </div>
      @else
        <div class="btn-group btn-group-xs btn-group-justified">
            <a href="{{route('login')}}" class="btn btn-xs btn-primary"><i class="fa fa-fw fa-user-circle text-left"></i>&nbsp; &nbsp;<b>Pegawai</b></a>
        </div>
      @endif 

      @if (Auth::guard('admin')->check()  )
        <div class="dropdown">
            <a href="#" >
              <button type="button" class="btn btn-default btn-block btn-sm " name="button">
                Login as ADMIN | &nbsp; {{ App\Admin::find(1)->name}} &nbsp; <i class="fa fa-fw fa-google-plus-square"></i>
              </button>
            </a>
        </div>
        <div class="btn-group btn-group-justified hidden-xs">
          <a href="{{ route('admin.dashboard') }}" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-dashboard"></i>&nbsp;A-Dashboard</a>
          <a href="/spa" class="btn btn-success btn-sm"><i class="fa fa-fw fa-pagelines"></i>&nbsp;SPA</a>
          <a href="{{ route('admin.logout') }}" class="btn btn-warning btn-sm"><i class="fa fa-fw fa-sign-out"></i>&nbsp;Logout</a>
        </div>
        <div class="btn-group btn-group-justified visible-xs">
          <a href="{{ route('admin.dashboard') }}" class="btn btn-success btn-sm">Dashboard</a>
          <a href="/spa" class="btn btn-default btn-sm">SPA</a>
          <a href="{{ route('admin.logout') }}" class="btn btn-info btn-sm">Logout</a>
        </div>
      @else
          <a href="{{route('admin.login')}}" class="btn btn-xs btn-default pull-right"><i class="fa fa-fw fa-android"></i> Admin</a>
      @endif
    </div>

