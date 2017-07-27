<canvas class ="panel cool" id="PFA" height="200%"></canvas>
<span class="label label-default pull-right">Last Updated : {{ date('M-Y ') }}</span>
<!-- Chart Script -->
<script>
  $(document).ready(function(){
    var ctx = document.getElementById("PFA").getContext('2d');
    var myChart = new Chart(ctx, {
      type: 'pie',
      data: {
      labels: ["Prov", "Polman", "Matra", "Mamasa", "Mamuju", "Mateng", "Majene"],
      datasets: [{
        backgroundColor: [
          "#2ecc71",
          "#3498db",
          "#95a5a6",
          "#9b59b6",
          "#f1c40f",
          "#e74c3c",
          "#34495e"
      ],
      data: [1, 5, 2, 6, 10, 3, 8]
      }]
    },
    options: {
      title: {
        display: true,
        text: 'PFA APIP Se-Sulawesi Barat'
      },
      legend: {
        position: 'right',
      },
      pieceLabel: {
      mode: 'value',
      arcText: false,
      format: function (value) {
        return value + ' org';
      }
      }



    }
    });
  });
</script>
