<!DOCTYPE html>
<html lang="en">
  <!-- The Head -->
  <head>
    @include('layout._head')
  </head>

    @include('layout._nav') <!--  Navigation -->

  <!-- The Body -->
  <body>
    @include('layout._session')
    @yield('contents')  <!--  Main Contents -->

  <!-- The Scripts -->
    @include('layout._scripts')
  </body>

  <!-- The Foot -->
  <footer>
    @include('layout._foot')
  </footer>
</html>
