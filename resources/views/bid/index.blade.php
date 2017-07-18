@extends('main')
@section('title')
  Bidang - Bidang  Pengawasan
@endsection
@section('content')
  <div class="container">
    <div class="row" id="app">
      <div class="col-md-2">
        <div class="panel panel-default">
          <div class="panel-body">
            <h4 class="text-center"><span class="label label-primary">Bidang Pengawasan</span></h4>
            <div class="list-group">
              <router-link class="list-group-item" to="/bid/tu"><i class="fa fa-clock-o fa-fw" aria-hidden="true"></i>&nbsp;| TU</router-link>
              <router-link class="list-group-item" to="/bid/ipp"><i class="fa fa-hotel fa-fw" aria-hidden="true"></i>&nbsp;| IPP</router-link>
              <router-link class="list-group-item" to="/bid/apd"><i class="fa fa-money fa-fw" aria-hidden="true"></i>&nbsp;| APD</router-link>
              <router-link class="list-group-item" to="/bid/an"><i class="fa fa-wheelchair fa-fw" aria-hidden="true"></i>&nbsp;| AN</router-link>
              <router-link class="list-group-item" to="/bid/inv"><i class="fa fa-crosshairs fa-fw" aria-hidden="true"></i>&nbsp;| INV</router-link>
              <router-link class="list-group-item" to="/bid/p3a"><i class="fa fa-wifi fa-fw" aria-hidden="true"></i>&nbsp;| P3A</router-link>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-10">
        <router-view></router-view>
      </div>
    </div>
  </div>
@endsection

@section('bot-scripts')
  <!-- Bottom Script -->
  <script src="{{asset('js/myvue.js')}}"></script>
@endsection
