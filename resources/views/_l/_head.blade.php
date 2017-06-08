
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="token" id="token" value="{{ csrf_token() }}">
    <title>BPKP - @yield('title')</title>

    <!-- Main Scripts -->
    <!-- jQuery & Bootstrap as app.js (necessary for Bootstrap's JavaScript plugins) -->
    <script src="{{asset('js/app.js')}}"></script>
    <script type="text/javascript">
      $(document).ready(function () {
         var $loader = $("#loader").addClass("se-pre-con");

         setTimeout(function() {
             $loader.fadeOut("se-pre-con");
         }, 100);
      });
    </script>
    <link href="/css/loader.css" rel="stylesheet">
    <!-- Main CSS Bootstrap & FontAwesome as app.css -->
    <link href="{{asset('css/app.css')}}" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="/css/nav.css" rel="stylesheet">
    <link href="/css/tab.css" rel="stylesheet">
    <link href="/css/timeline.css" rel="stylesheet">
    <link href="/css/bpkp.css" rel="stylesheet">
    <!-- Custom CSS -->
    @yield('stylesheets')
      <script src="{{asset('js/Chart.bundle.min.js')}}"></script>
      <script src="{{asset('js/Chart.PieceLabel.min.js')}}"></script>
    @yield('top-scripts')
