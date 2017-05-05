



<canvas id="Elemen" class="panel cool" height="175%"></canvas>
<!-- Chart Script -->
<script>
  var ctx = document.getElementById("Elemen").getContext('2d');
  var myChart = new Chart(ctx, {
    type: 'doughnut',
    data: {
    labels: ["Peran dan Layanan | KPA", "Pengelolaan SDM | KPA", "Praktek Profesional | KPA", "Akuntabilitas dan Manajemen Kinerja | KPA", "Budaya dan Organisasi | KPA", "Struktur dan Tata Kelola | KPA"],
    datasets: [{
      backgroundColor: [
        "#2ecc71",
        "#3498db",
        "#95a5a6",
        "#9b59b6",
        "#f1c40f",
        "#e74c3c",
    ],
    data: [5, 10, 7, 7, 5, 5]
  },
 ]
  },
  options: {
    title: {
      display: true,
      text: 'Elemen Kapabilitas APIP '
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
