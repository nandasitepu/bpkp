<canvas class ="panel cool" id="SPIP" height="175%" ></canvas>

<!-- Chart Script -->
<script>
        var ctx = document.getElementById("SPIP").getContext("2d");
        var myChart = new Chart(ctx, {
            type: 'horizontalBar',
            data: {
                labels:  [
                  "Lingkungan Pengendalian ",
                  "Penilaian Risiko ",
                  "Kegiatan Pengendalian ",
                  "Informasi dan Komunikasi ",
                  "Pemantauan Berkelanjutan "
                ],
                datasets: [
                  {
                    label: 'Nilai Rata-Rata Unsur',
                    data: [2, 1, 2, 1, 2],
                    backgroundColor: [
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

                    ],
                    borderWidth: 2
                },
              ]
            },
            options: {
                scales: {
                    xAxes: [{
                        ticks: {
                            beginAtZero:true,
                            max: 5
                        }
                    }]
                },
                title: {
                  display: true,
                  text: 'Maturitas SPIP',
                },


            }
        });
      </script>


