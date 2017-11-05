@if (Auth::guest())
  <div class="btn-group btn-group-justified">
    <a href="spa" class="btn btn-primary btn-xs "><i class="fa fa-user-secret"></i>&nbsp; Tamu</a>
    <a href="{{route('login')}}" class="btn btn-success btn-xs "><i class="fa fa-user-circle-o"></i>&nbsp; Pegawai</a>
    <a href="{{route('admin.login')}}" class="btn btn-default btn-xs "><i class="fa fa-android"></i>&nbsp; Admin</a>
  </div>


@elseif (Auth::guard('web')->check() )
  <div class="text-center">
    
       <span>
          <button type="button" class="label label-info" name="button" >
            Selamat Datang | &nbsp; {{ Auth::user()->name }} &nbsp; 
         
          </button>
          &nbsp;   |   &nbsp;   
          <span>
            <a href="{{route('user.dashboard')}}" class="label label-primary" name="button" > Dashboard </a>&nbsp;
            <a href="{{route('logout')}}" class="label label-danger" ><i class="fa fa-fw fa-sign-out"></i></a>
          </span>
       </span>
      
  </div>



@else (Auth::guard('admin')->check()  )
  <div class="text-center">
    
       <span>
          <button type="button" class="label label-info" name="button" >
            Selamat Datang | &nbsp; {{ App\Admin::find(1)->name}} &nbsp; 
         
          </button>
          &nbsp;   |   &nbsp;   
          <span>
            <a href="{{route('user.dashboard')}}" class="label label-primary" name="button" > Dashboard </a>&nbsp;
            <a href="{{route('logout')}}" class="label label-danger" ><i class="fa fa-fw fa-sign-out"></i></a>
          </span>
       </span>
      
  </div>
@endif
