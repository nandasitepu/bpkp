<canvas id="Unsur" class="panel cool" height="175%"></canvas>
<!-- Chart Script -->
<script>
  var ctx = document.getElementById("Unsur").getContext('2d');
  var myChart = new Chart(ctx, {
    type: 'doughnut',
    data: {
    labels: [
      "Lingkungan Pengendalian | Sub:",
      "Penilaian Risiko | Sub:",
      "Kegiatan Pengendalian | Sub:",
      "Informasi dan Komunikasi | Sub:",
      "Pemantauan Berkelanjutan | Sub:"
    ],
    datasets: [{
      backgroundColor: [
        "#2ecc71",
        "#3498db",
        "#95a5a6",
        "#9b59b6",
        "#f1c40f",
      ],
    data: [8, 2, 11, 2, 2]
  },
 ]
  },
  options: {
    title: {
      display: true,
      text: 'Unsur & Sub Unsur SPIP '
    },
    legend: {
      position: 'right',
    },
    pieceLabel: {
    mode: 'value',
    arcText: false,
    format: function (value) {
      return value;
    }
  }

  }
  });
</script>
