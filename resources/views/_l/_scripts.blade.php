<script>
  // rename myToken as you like
  window.Laravel =  <?php echo json_encode([
      'csrfToken' => csrf_token(),
  ]); ?>
</script>


<!-- Include all compiled plugins (below), or include individual files as needed -->
@yield ('bot-scripts')
