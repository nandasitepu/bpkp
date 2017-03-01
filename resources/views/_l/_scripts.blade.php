<!-- jQuery & Bootstrap as app.js (necessary for Bootstrap's JavaScript plugins) -->
<script src="../js/app.js"></script>
<!-- VUE -->
@yield('scripts')

<!-- Include all compiled plugins (below), or include individual files as needed -->

<script>
$(document).ready(function(){
  $(".nav-tabs a").click(function(){
        $(this).tab('show');
    });
});
</script>
