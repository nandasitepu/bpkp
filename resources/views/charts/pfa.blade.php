


<script type="text/javascript" src="../assets/chart.js/dist/Chart.bundle.min.js"></script>
<canvas class ="panel cool" id="PFA"></canvas>
<!-- Chart Script -->
<script>
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
      text: 'PFA Sulawesi Barat'
    }

  }
  });
</script>
