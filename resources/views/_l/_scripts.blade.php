<script>
  // rename myToken as you like
  window.Laravel =  <?php echo json_encode([
      'csrfToken' => csrf_token(),
  ]); ?>
</script>


<!-- Include all compiled plugins (below), or include individual files as needed -->
@yield ('bot-scripts')
<script src="{{asset('js/Chart.bundle.min.js')}}"></script>
<script src="{{asset('js/Chart.PieceLabel.min.js')}}"></script>