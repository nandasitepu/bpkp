 <div class="col-md-12 text-center well" style="padding:10px">
    <div id="user-menu">
        <a href="/#slider" title="Slider" data-toggle="tab" style="">
            <button type="button" class="btn btn-default btn-sm " >
            <i class="fa fa-home fa-fw"></i>
            </button>
        </a>
        &nbsp; || &nbsp;

        <a href="#spa" title="SPA" data-content="SPA" data-toggle="tab" data-trigger="hover" data-placement="bottom">
            <button type="button" class="btn btn-default btn-sm " >
            <i class="fa fa-th-list fa-fw"></i>
            </button>
        </a>
        <a href="{{url('pegawai')}}" data-content="Pegawai" data-toggle="popover" data-trigger="hover" data-placement="bottom" >
            <button type="button" class="btn btn-default btn-sm " >
            <i class="fa fa-user-circle-o fa-fw fa-lg"></i>
            </button>
        </a>
        <a href="{{route('tugas.index')}}" data-content="Tugas" data-toggle="popover" data-trigger="hover" data-placement="bottom" >
            <button type="button" class="btn btn-default btn-sm " >
            <i class="fa fa-briefcase fa-fw"></i>
            </button>
        </a>
        <a href="{{url('perpustakaan')}}" data-content="Pustaka" data-toggle="popover" data-trigger="hover" data-placement="bottom" >
            <button type="button" class="btn btn-default btn-sm " >
            <i class="fa fa-book fa-fw"></i>
            </button>
        </a>

        &nbsp; || &nbsp;
        <button type="button" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown">
            <i class="fa fa-angle-down fa-fw"></i>
        </button>
        <ul class="dropdown-menu dropdown-menu-right">
            <li><a href="#"><i class="fa fa-music fa-fw"></i>&nbsp;More</a></li>
        </ul>
    </div>
</div>