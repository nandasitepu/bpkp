<!DOCTYPE html>
<html lang="en">
    <!-- The Head -->
    <head>
      @include('_l._head')
      @yield('stylesheets')
    </head>


    <!-- The Body -->
    <body>
      @yield('content')  <!--  Main Contents -->

    <!-- The Scripts -->
      @include('_l._scripts')
      @yield('scripts')
    </body>
    <br>
    @include('_l._navbot') <!--  Navigation -->
    <!-- The Foot -->
    <footer>
      @include('_l._foot')
    </footer>

</html>
