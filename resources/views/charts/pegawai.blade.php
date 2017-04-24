


<script type="text/javascript" src="../js/chart.js"></script>
<canvas class ="panel cool" id="PFA" height="150%"></canvas>
<span class="label label-default pull-right">Last Updated : 1 Februari 2017</span>
<!-- Chart Script -->
<script>
  var ctx = document.getElementById("PFA").getContext('2d');
  var myChart = new Chart(ctx, {
    type: 'pie',
    data: {
    labels: ["IPP", "APD", "AN", "INV", "P3A", "TU"],
    datasets: [{
      backgroundColor: [
        "#2ecc71",
        "#3498db",
        "#95a5a6",
        "#9b59b6",
        "#f1c40f",
        "#e74c3c",
    ],
    data: [1, 5, 2, 6, 10, 3]
    }]
  },
  options: {
    title: {
      display: true,
      text: 'PFA BPKP Sulawesi Barat'
    }

  }
  });
</script>
