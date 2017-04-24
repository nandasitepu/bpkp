@extends('main')

@section('stylesheets')

@endsection

@section('content')
  <div class="container">
    <div class="row">
      <div class="col-md-8">
        <div class="panel panel-default">
          <div class="panel-body">
            <div class="row">
              <div class="col-md-12">
                <h4 class="text-center">Berita // Perwakilan BPKP Provinsi Sulawesi Barat</h4>
                <h6 class="text-center">Made with
                    <i class="fa fa-fw fa-heart text-danger"></i> by <a href="#" class="btn btn-primary btn-xs" target="_blank">Nanda Sitepu </a>
                </h6>
              </div>
            </div>
            <hr>
            @foreach ($posts as $post)
            <div class="row">
              <div class="col-md-4">
                <div class="berita-image">
                  <img src="http://lorempixel.com/150/150?rand=1" class="img-thumbnail" alt="Image" width="100%">
                </div>
              </div>
              <div class="col-md-8">

                  <div id="berita">
                    <div class="berita-title">
                      <h4>{{$post->title}}</h4>
                    </div>
                    <div class="berita-info">
                      <span class="label label-default">Uploader: NS</span>
                      <span class="label label-default">{{ date('d F Y  - H:i',strtotime($post->created_at)) }}</span>
                      <span class="label label-default">Category: Berita</span>
                    </div>
                    <hr>
                    <div class="berita-body">
                      <p>
                      {{ substr($post->body,0,200) }} {{ strlen($post->body) > 50 ? "..." : "" }}
                      </p>
                    </div>
                    <hr>
                    <div class="berita-footer">
                      <div class="text-right">
                        <a href="#"><button class="btn btn-sm btn-default"><i class="fa fa-fw fa-eye"></i> Show</button></a>
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
              {!! $posts->links() !!}
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4">
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

        @component('_c.social')

        @endcomponent
      </div>
    </div>
  </div>
@endsection

@section('scripts')

@endsection
