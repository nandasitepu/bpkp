



<div class="text-center">
  <canvas class ="panel cool" id="LP" height="200%" ></canvas>
</div>
<span class="label label-default pull-right">Last Updated : {{ date('d-M-Y ') }} </span>
<!-- Chart Script -->
<script>
  var ctx = document.getElementById("LP").getContext('2d');
  var myChart = new Chart(ctx, {
    type: 'doughnut',
    data: {
    labels: ["Laki-Laki", "Perempuan"],
    datasets: [{
      backgroundColor: [
        "#2ecc71",
        "#3498db",

    ],
    data: [32, 47]
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
