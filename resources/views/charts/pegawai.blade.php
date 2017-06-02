



<div class="text-center">
  <canvas class ="panel cool" id="PFA" height="200%" ></canvas>
</div>
<span class="label label-default pull-right">Last Updated : {{ date('d-M-Y ') }} </span>
<!-- Chart Script -->
<script>
  var ctx = document.getElementById("PFA").getContext('2d');
  var myChart = new Chart(ctx, {
    type: 'doughnut',
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
    data: [14, 17, 10, 9, 9, 20]
    }]
  },
  options: {
    title: {
      display: true,
      text: 'Pegawai BPKP Prov Sulawesi Barat '
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
  </script>
