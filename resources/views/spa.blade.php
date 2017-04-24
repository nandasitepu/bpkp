<!DOCTYPE html>
<html lang="en">
  <!-- The Head -->
  <head>
    @include('_l._head')
  </head>

    @include('_l._navtop') <!--  Navigation -->

  <!-- The Body -->
  <body>



      @include('_l._session')
      @yield('content')  <!--  Main Contents -->

    <!-- The Scripts -->
  @include('_l._scripts')


  </body>


    @include('_l._navbot') <!--  Navigation -->
  <!-- The Foot -->
  <footer>
    @include('_l._foot')
  </footer>
</html>
