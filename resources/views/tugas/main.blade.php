<!DOCTYPE html>
<html lang="en">
    <!-- The Head -->
    <head>
      @include('layout._head')
      @yield('stylesheets')
    </head>


    <!-- The Body -->
    <body>
      @yield('contents')  <!--  Main Contents -->

    <!-- The Scripts -->
      @include('layout._scripts')
      @yield('scripts')
    </body>

    <!-- The Foot -->
    <footer>
      @include('layout._foot')
    </footer>

</html>
