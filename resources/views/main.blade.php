<!DOCTYPE html>
<html lang="en">

  <head>
    @include('_l._head')
    @yield('more-css')
  </head>
  <body onload="myFunction()">

    <nav>
      <!--  Navigation Top -->

      @include('_l._navtop')
    </nav>

    @yield('top_scripts')

    <!--  Main Contents -->

    <div class="container">
      <div id="loader">
        <p class="text-center" style="margin-top: 120px">
          <span class="label label-primary">Loading ..</span>
        </p>
      </div>
      <div id="app" class="animate-bottom" style="display:none">
        @yield('content')
      </div>
    </div>

    <!-- The Scripts -->
    @include('_l._scripts')
    @yield('bot_scripts')
    <nav>
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
