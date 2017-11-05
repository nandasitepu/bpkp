
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="token" id="token" value="{{ csrf_token() }}">
    <title>BPKP - @yield('title')</title>

    <!-- Main Scripts -->
    <!-- jQuery & Bootstrap as app.js (necessary for Bootstrap's JavaScript plugins) -->

    <script src="{{asset('js/app.js')}}"></script>
    {{-- dataTables --}}
 
    <link href="{{ asset('assets/datatables/css/dataTables.bootstrap.min.css') }}" rel="stylesheet">
    <script src="{{ asset('assets/dataTables/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/dataTables/js/dataTables.bootstrap.min.js') }}"></script>
    
  
    <!-- Loader -->
    <script>
      var myVar;

      function myFunction() {
          myVar = setTimeout(showPage, 1000);
      }

      function showPage() {
        document.getElementById("loader").style.display = "none";
        document.getElementById("app").style.display = "block";
        /* var element = document.getElementById("the-load");
        element.outerHTML = ""; */
      }


    </script>

    <style>
      /* Center the loader */
      #loader {
        position: absolute;
        left: 50%;
        top: 300px;
        z-index: 1;
        width: 150px;
        height: 150px;
        margin: -75px 0 0 -75px;
        width: 120px;
        height: 120px;
        background: url(/img/loading.gif) center no-repeat #fff;
        /*
        Originial Spin
        border: 16px solid #f3f3f3;
        border-radius: 50%;
        border-top: 16px solid #3498db;
        -webkit-animation: spin 2s linear infinite;
        animation: spin 2s linear infinite;
        */
      }

      @-webkit-keyframes spin {
        0% { -webkit-transform: rotate(0deg); }
        100% { -webkit-transform: rotate(360deg); }
      }

      @keyframes spin {
        0% { transform: rotate(0deg); }
        100% { transform: rotate(360deg); }
      }

      /* Add animation to "page content" */
      .animate-bottom {
        position: relative;
        -webkit-animation-name: animatebottom;
        -webkit-animation-duration: 1s;
        animation-name: animatebottom;
        animation-duration: 1s
      }

      @-webkit-keyframes animatebottom {
        from { opacity:0 }
        to { opacity:1 }
      }

      @keyframes animatebottom {
        from{ opacity:0 }
        to{ opacity:1 }
      }

      </style>
    <!-- <link href="/css/loader.css" rel="stylesheet"> -->
    <!-- Main CSS Bootstrap & FontAwesome as app.css -->
    <link href="{{asset('css/app.css')}}" rel="stylesheet">
    <!-- Custom CSS -->
    
    <link href="{{asset('css/nav.css')}}" rel="stylesheet">
    <link href="{{asset('css/tab.css')}}" rel="stylesheet">
    <link href="{{asset('css/timeline.css')}}" rel="stylesheet">
    <link href="{{asset('css/bpkp.css')}}" rel="stylesheet">

    <!-- Custom CSS -->
     @yield('stylesheets')
    <script src="{{asset('js/Chart.bundle.min.js')}}"></script>
    <script src="{{asset('js/Chart.PieceLabel.min.js')}}"></script>
    
    @yield('top-scripts')
<script>
  window.Laravel =  <?php echo json_encode([
      'csrfToken' => csrf_token(),
  ]); ?>
</script>