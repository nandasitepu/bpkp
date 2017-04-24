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
            <div class="row">
              <div class="col-md-4">
                <div class="berita-image">
                  <img src="http://lorempixel.com/150/150?rand=1" class="img-thumbnail" alt="Image" width="100%">
                </div>
              </div>
              <div class="col-md-8">
                <div class="berita-title">
                  <h4>Example product</h4>
                </div>
                <div class="berita-info">
                  <span class="label label-default">Uploader: NS</span>
                  <span class="label label-default">29 Januari 2017</span>
                  <span class="label label-default">Category: Berita</span>
                </div>
                <hr>
                <div class="berita-body">
                    <p>
                      Lorem ipsum dolor sit amet, consetetur sadipscing elitr,
                      sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat
                    </p>
                </div>
                <hr>
                <div class="berita-footer">
                    <span class="pull-right buttons">
                        <button class="btn btn-sm btn-default"><i class="fa fa-fw fa-eye"></i> Show</button>
                        <button class="btn btn-sm btn-primary"><i class="fa fa-fw fa-shopping-cart"></i> Buy</button>
                    </span>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>
@endsection

@section('scripts')

@endsection
