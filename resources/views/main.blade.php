<!DOCTYPE html>
<html lang="en">

  <head>
    @include('_l._head')
    @yield('more-css')
  </head>
  <body>
    <div class="se-pre-con" id="loader"></div>
    <nav>
      <!--  Navigation Top -->
      @include('_l._navtop')
    </nav>
    @yield('top_scripts')
    <!--  Main Contents -->
      @yield('content')
    <!-- The Scripts -->
    @include('_l._scripts')
    @yield('bot_scripts')
    <nav>
      <br>
      <br>
      <br>
      <!--  Navigation Bottom-->
      @include('_l._navbot')
    </nav>
  </body>

  <footer>
    <!-- The Foot -->
    @include('_l._foot')
  </footer>

</html>
