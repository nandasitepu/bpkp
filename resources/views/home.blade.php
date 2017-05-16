@extends('main')
@section('title', 'Perwakilan Provinsi Sulawesi Barat')
@section('bot-scripts')
<!-- Bottom Script -->
<script src="../js/style.js"></script>
<script type="text/javascript">
    $(document).ready(function(e){
      $('.search-panel .dropdown-menu').find('a').click(function(e) {
      e.preventDefault();
      var param = $(this).attr("href").replace("#","");
      var concept = $(this).text();
      $('.search-panel span#search_concept').text(concept);
      $('.input-group #search_param').val(param);
    });
  });
</script>
@endsection

@section('content')
<div class="container">
  <div class="row">
    <!-- Search and Button -->
    <div class="col-md-8">
      <div class="col-md-12">
        @component('_c.search')@endcomponent
      </div>
    </div>
    <div class="col-md-4" class="well">
      @component('_c.login')@endcomponent
    </div>
  </div>
  <div class="row">
    <!-- Jumbotron and Tabs -->
    <div class="col-md-8">
      @component('_c.slider')@endcomponent
    </div>
    <div class="col-md-4">
        @component('_c.social')@endcomponent
      <div class="col-md-6 col-xs-12 center panel panel-default">
        @component('_c.app')@endcomponent
      </div>
      <div class="col-md-6 col-xs-12 center ">
        @component('_c.slogan')@endcomponent
      </div>

    </div>

  </div>

</div>
</div>
@endsection
