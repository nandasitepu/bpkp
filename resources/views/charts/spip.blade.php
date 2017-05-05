<canvas class ="panel cool" id="SPIP" height="175%"></canvas>
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
                    data: [2.5, 2, 1.5, 1.8, 2.2, 2.8,2.1],
                    backgroundColor: [
                        "#fff",
                        "#fff",
                        "#fff",
                        "#fff",
                        "#fff",
                        "#fff",
                        "#fff",
                    ],
                    borderColor: [
                      "#2ecc71",
                      "#3498db",
                      "#95a5a6",
                      "#9b59b6",
                      "#f1c40f",
                      "#e74c3c",
                      "#000"
                    ],
                    borderWidth: 2
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
                },
                

            }
        });
      </script>
