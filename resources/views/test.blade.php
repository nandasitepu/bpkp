@extends('main')
@section('contents')
  <div class="container">
    <div class="row">
      <div class="col-md-12" id="app">
        TEST

        <div id="app">
          @{{ message }}
        </div>
      </div>
    </div>
  </div>
@endsection




<script type="text/javascript" src="js/vue.js"></script>
<script type="text/javascript">
var app = new Vue({
  el: '#app',
  data: {
    message: 'Hello Vue!'
  }
})
</script>
