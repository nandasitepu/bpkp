<div id="app">
  <div class="pull-right">
    <br>
    <router-link class="btn btn-default btn-xs" to="/data/pegawai">Pegawai</router-link>
    <router-link class="btn btn-info btn-xs" to="/data"><i class="fa fa-times-circle-o"></i></router-link>
    <hr>
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
