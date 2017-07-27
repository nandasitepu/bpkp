
  <div class="panel panel-default">
    <div class="panel-heading text-center">
      <router-link class="btn btn-default btn-sm" to="/data/pegawai">Pegawai</router-link>
      <router-link class="btn btn-default btn-sm" to="/data/obrik">Obrik</router-link>
      <router-link class="btn btn-default btn-sm" to="/tugas">Tugas</router-link>
      <hr>
      @component('_c.search_xs')@endcomponent
    </div>
    <div class="panel-body">
  
      <!--  Dynamic Data -->
      <router-view></router-view>
    </div>
  </div>

@section('bot_scripts')
  <script src="{{asset('js/myvue.js')}}"></script>
@endsection
