<canvas class ="panel cool" id="APIP" height="200%"></canvas>
<span class="label label-default pull-right">Last Updated : {{ date('M-Y ') }}</span>
<!-- Chart Script -->
<script>
  var ctx = document.getElementById("APIP").getContext("2d");
  var myChart = new Chart(ctx, {
      type: 'bar',

      data: {
          labels:  ["Prov", "Polman", "Matra", "Mamasa", "Mamuju", "Mateng","Majene"],
          datasets: [
            {
              label: 'Level APIP',
              data: [1.5 , 3, 2, 2.4, 2.2, 2.8,1.7],
              backgroundColor: [
                  'rgba(54, 162, 235, 0.2)',
                  'rgba(54, 162, 235, 0.2)',
                  'rgba(54, 162, 235, 0.2)',
                  'rgba(54, 162, 235, 0.2)',
                  'rgba(54, 162, 235, 0.2)',
                  'rgba(54, 162, 235, 0.2)',
                  'rgba(54, 162, 235, 0.2)'

              ],
              borderColor: [
                  'rgba(54, 162, 235, 1)',
                  'rgba(54, 162, 235, 1)',
                  'rgba(54, 162, 235, 1)',
                  'rgba(54, 162, 235, 1)',
                  'rgba(54, 162, 235, 1)',
                  'rgba(54, 162, 235, 1)',
                  'rgba(54, 162, 235, 1)'
              ],
              borderWidth: 1
          },
        ]
      },
      options: {
          scales: {
              yAxes: [{
                  ticks: {
                      max: 5,
                      beginAtZero:true
                  }
              }]
          },
          title: {
            display: true,
            text: 'APIP Sulawesi Barat',
          },
          tooltipTemplate: "<%if (label){%><%=label %>: <%}%><%= value + ' %' %>",

      },

  });
</script>
