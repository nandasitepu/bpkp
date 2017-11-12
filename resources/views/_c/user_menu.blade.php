 <div class="col-md-12 text-center well" style="padding:10px">
    <div id="user-menu">
        <a href="{{route('home')}}" title="Slider" data-toggle="tab" style="">
            <button type="button" class="btn btn-default btn-sm " >
            <i class="fa fa-home fa-fw"></i>
            </button>
        </a>

        <button type="button" class="btn btn-default btn-xs"></button>
    
        <a href="{{route('obrik.index')}}" title="Obrik" data-content="Obrik" data-toggle="tab" data-trigger="hover" data-placement="bottom">
            <button type="button" class="btn btn-default btn-sm " >
            <i class="fa fa-cubes fa-fw"></i>
            </button>
        </a>

        <a href="{{route('pegawai.index')}}" data-content="Pegawai" data-toggle="popover" data-trigger="hover" data-placement="bottom" >
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
    </div>
</div>