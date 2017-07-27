<div class="text-center">
  <canvas class ="panel cool" id="Obrik" height="200%"></canvas>
</div>
<span class="label label-default pull-right">Last Updated : {{ date('M-Y ') }}</span>
<!-- Chart Script -->
<script>
  $(document).ready(function(){
    var ctx = document.getElementById("Obrik").getContext('2d');
    var myChart = new Chart(ctx, {
      type: 'doughnut',
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
          "#000"
      ],
      data: [54, 34, 24, 26, 30, 20, 31]
      }]
    },
    options: {
      title: {
        display: true,
        text: 'Obrik'
      },
      legend: {
        position: 'left',
      },
      pieceLabel: {
      mode: 'value',
      arcText: false,
      format: function (value) {
        return value + ' obrik';
      }
      }


    }
    });
  });
</script>
