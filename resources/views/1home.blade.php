@extends('main')
@section('title', 'Perwakilan Provinsi Sulawesi Barat')
@section('stylesheets')
  <link rel="stylesheet" href="/css/tugas.css">
  <style>
    body {
        position: relative;
    }
    .affix {
        top: 20px;
        right: 30px;
    }
   </style>
@endsection

@section('content')

@endsection

@section('bot-scripts')
  <!-- Bottom Script -->
  <script src="/js/style.js"></script>
  <script type="text/javascript">
    $(document).ready(function(e){
      // Search Vue
        $('.search-panel .dropdown-menu').find('a').click(function(e) {
        e.preventDefault();
        var param = $(this).attr("href").replace("#","");
        var concept = $(this).text();
        $('.search-panel span#search_concept').text(concept);
        $('.input-group #search_param').val(param);
        });
      // PopOver
        $('[data-toggle="popover"]').popover();

    });
  </script>
  <script src="{{asset('js/myvue.js')}}"></script>
@endsection
