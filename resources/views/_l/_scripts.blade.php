<script>
  // rename myToken as you like
  window.Laravel =  <?php echo json_encode([
      'csrfToken' => csrf_token(),
  ]); ?>
</script>
<!-- Main Scripts -->
<!-- jQuery & Bootstrap as app.js (necessary for Bootstrap's JavaScript plugins) -->

<script src="{{asset('js/app.js')}}"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
@yield ('bot-scripts')
