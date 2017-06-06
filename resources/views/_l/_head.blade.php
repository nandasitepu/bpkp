
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="token" id="token" value="{{ csrf_token() }}">
    <title>BPKP - @yield('title')</title>
    <!-- Main CSS Bootstrap & FontAwesome as app.css -->
    <link href="{{asset('css/app.css')}}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="dist/css/bootstrap-material-design.css">
    <link rel="stylesheet" type="text/css" href="dist/css/ripples.min.css">
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
