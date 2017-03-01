


<script type="text/javascript" src="../js/chart.js"></script>
<canvas class ="panel cool" id="SPIP"></canvas>
<span class="label label-default pull-right">Last Updated : 1 Februari 2017</span>
<!-- Chart Script -->
<script>
        var ctx = document.getElementById("SPIP").getContext("2d");
        var myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels:  ["Prov", "Polman", "Matra", "Mamasa", "Mamuju", "Mateng", "Majene"],
                datasets: [
                  {
                    label: 'Level SPIP',
                    data: [3, 2, 1.5, 1.8, 2.2, 2.8,2.1],
                    backgroundColor: [
                      'rgba(255, 206, 86, 0.2)',
                      'rgba(255, 206, 86, 0.2)',
                      'rgba(255, 206, 86, 0.2)',
                      'rgba(255, 206, 86, 0.2)',
                      'rgba(255, 206, 86, 0.2)',
                      'rgba(255, 206, 86, 0.2)',
                      'rgba(255, 206, 86, 0.2)'
                    ],
                    borderColor: [
                      'rgba(255, 159, 64, 1)',
                      'rgba(255, 159, 64, 1)',
                      'rgba(255, 159, 64, 1)',
                      'rgba(255, 159, 64, 1)',
                      'rgba(255, 159, 64, 1)',
                      'rgba(255, 159, 64, 1)',
                      'rgba(255, 159, 64, 1)'
                    ],
                    borderWidth: 1
                },
              ]
            },
            options: {
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero:true
                        }
                    }]
                },
                title: {
                  display: true,
                  text: 'SPIP Sulawesi Barat',
                }

            }
        });
      </script>
