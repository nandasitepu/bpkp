<div id="app">
  <div class="row">
    <div class="col-md-11">
      <router-link class="btn btn-default btn-block btn-sm" to="/data/pegawai">Daftar Pegawai</router-link>
    </div>
    <div class="col-md-1">
      <router-link class="btn btn-info btn-block btn-sm" to="/data"><i class="fa fa-times-circle-o"></i></router-link>
    </div>
  </div>

  <!--  Dynamic Data -->
  <div class="col-md-12">
    <br>
    <router-view></router-view>
  </div>
</div>

@section('bot_scripts')
 <script src="{{asset('js/myvue.js')}}"></script>
@endsection
