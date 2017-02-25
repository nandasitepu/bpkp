<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="/assets/jquery/dist/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="/assets/bootstrap/dist/js/bootstrap.min.js"></script>
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
