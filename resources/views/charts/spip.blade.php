<canvas class ="panel cool" id="SPIP" height="175%"></canvas>
<span class="label label-default pull-right">Last Updated : {{ date('d-M-Y ') }} </span>
<!-- Chart Script -->
<script>
        var ctx = document.getElementById("SPIP").getContext("2d");
        var myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels:  ["Prov", "Mamuju", "Majene", "Mamasa", "Polman", "Mateng", "Matra"],
                datasets: [
                  {
                    label: 'Level SPIP',
                    data: [1.917, 2.548, 2.725, 1.340, 2.525, "belum ada" , 1.635],
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
