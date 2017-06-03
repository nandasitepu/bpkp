<!DOCTYPE html>
<html lang="en">

  <head>
    @include('_l._head')
    @yield('more-css')
  </head>
  <nav>
    <!--  Navigation Top -->
    @include('_l._navtop')
  </nav>


  <body>
    @yield('top_scripts')
    <!--  Main Contents -->
    @yield('content')
    <!-- The Scripts -->
    @include('_l._scripts')
    @yield('bot_scripts')

  </body>

  <nav>
    <!--  Navigation Bottom-->
    @include('_l._navbot')
  </nav>

  <footer>
    <!-- The Foot -->
    @include('_l._foot')
  </footer>

</html>
