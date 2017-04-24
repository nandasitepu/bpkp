<!-- jQuery & Bootstrap as app.js (necessary for Bootstrap's JavaScript plugins) -->



<script>
  // rename myToken as you like
  window.Laravel =  <?php echo json_encode([
      'csrfToken' => csrf_token(),
  ]); ?>
</script>

<script src="{{asset('js/app.js')}}"></script>
<!-- VUE -->
@yield('scripts')

<!-- Include all compiled plugins (below), or include individual files as needed -->
