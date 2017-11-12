@extends ('main')
@section('title')
    Pengumuman
@endsection
@section('content')
    <div class="container">
    <div class="row">
      <div class="col-md-8">
        <div class="panel panel-default">
          <div class="panel-body">
            <div class="row">
              <div class="col-md-12">
                <h4 class="text-center">Pengumuman BPKP Provinsi Sulawesi Barat</h4>
                <h6 class="text-center">Made with
                    <i class="fa fa-fw fa-heart text-danger"></i> by <a href="#" class="btn btn-primary btn-xs" target="_blank">Nanda Sitepu </a>
                </h6>
              </div>
            </div>
            <hr>
            @foreach ($pengumuman as $pgm)
            <div class="row">
              <div class="col-md-4">
                <div class="pengumuman-image">
                  <img src="/img/no-image.png" alt="Image" height="150px">
                </div>
              </div>
              <div class="col-md-8">

                  <div id="pengumuman">
                    <div class="pengumuman-title">
                      <h4>{{$pgm->judul}}</h4>
                    </div>
                    <div class="pengumuman-info">
                      <span class="label label-default">Uploader: NS</span>
                      <span class="label label-default">{{ date('d F Y  - H:i',strtotime($pgm->tanggal)) }}</span>
                      <span class="label label-default">Category: pengumuman</span>
                    </div>
                    <hr>
                    <div class="pengumuman-body">
                      <p>
                      {{ substr($pgm->isi,0,200) }} {{ strlen($pgm->isi) > 50 ? "..." : "" }}
                      </p>
                    </div>
                    <hr>
                    <div class="pengumuman-footer">
                      <div class="text-right">
                        <a href="{{route('pengumuman.show', $pgm->id)}}"><button class="btn btn-sm btn-default"><i class="fa fa-fw fa-eye"></i> Show</button></a>
                        @if ( Auth::check() )
                        <a href="#"><button class="btn btn-sm btn-primary"><i class="fa fa-fw fa-edit"></i> Edit</button></a>
                        @endif

                      </div>
                    </div>
                    <hr>
                  </div>

              </div>
            </div>
            @endforeach
            <div class="text-center">
              {!! $pengumuman->links() !!}
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <!-- Login or Not -->
        @if (Auth::check())
          <div class="panel panel-default">
            <div class="panel-body">
              <a href="#"><button class="btn btn-primary btn-sm btn-block">New</button></a>
            </div>
          </div>
        @else
        <div class="panel panel-default">
          <div class="panel-body">
            <div class="btn-group-justified">
              <a href="{{route('login')}}" class="btn btn-xs btn-success"><i class="fa fa-users"></i>&nbsp; Tamu</a>
              <a href="{{route('login')}}" class="btn btn-xs btn-primary"><i class="fa fa-user"></i>&nbsp; Pegawai</a>
              <a href="{{route('login')}}" class="btn btn-xs btn-default"><i class="fa fa-android"></i>&nbsp; Admin</a>
            </div>
          </div>
        </div>
        @endif
        <!-- Social Media -->
        @component('_c.social')@endcomponent
        <!-- Twitter-->
        <div class="service-wrapper">
        <a class="twitter-timeline"  href="https://twitter.com/BPKPgoid/lists/sinopsis-informasi" data-widget-id="579844155678937090">
          Tweet Dari BPKPgoid
        </a>
        <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
        </div>
      </div>
    </div>
  </div>
@endsection