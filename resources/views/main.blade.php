<!DOCTYPE html>
<html lang="en">
  <!-- The Head -->
  <head>
    @include('_l._head')
  </head>
    <!--  Navigation Top -->
    @include('_l._navtop')

  <!-- The Body -->
  <body>
    <!-- The Session -->
    @include('_l._session')
    
    <!--  Main Contents -->
    @yield('content')
    <!-- The Scripts -->
    @include('_l._scripts')
  </body>
    <!--  Navigation Bottom-->
    @include('_l._navbot')

  <footer>
    <!-- The Foot -->
    @include('_l._foot')
  </footer>
</html>
