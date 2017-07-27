<canvas class ="panel cool" id="SPIP" height="175%"></canvas>
<span class="label label-default pull-right">Last Updated : {{ date('M-Y ') }} </span>
<!-- Chart Script -->
<script>
  $(document).ready(function(){
  $.ajax({
    url: "http://bpkp.dev/api/spip",
    method: "GET",
    success: function(data) {
      console.log(data);
      var nilai_spip = [];
      for (var i in data)
      {
        nilai_spip.push(data[i].nilai_spip);
      }

      var spipData = {
          labels:  ["Prov", "Mamuju", "Majene", "Mamasa", "Polman", "Mateng", "Matra"],
          datasets: [
            {
              label: 'Nilai Maturitas SPIP',
              data: [2.288, 2.548, 2.725, 2.107, 2.525, 1.085 , 1.635],
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
        };
      var chartOptions = {
      "hover": {
        "animationDuration": 2
      },
      "animation": {
        "duration": 2000,
        "onComplete": function() {
          var chartInstance = this.chart,
            ctx = chartInstance.ctx;

          ctx.font = Chart.helpers.fontString(Chart.defaults.global.defaultFontSize, Chart.defaults.global.defaultFontStyle, Chart.defaults.global.defaultFontFamily);
          ctx.textAlign = 'center';
          ctx.textBaseline = 'bottom';

          this.data.datasets.forEach(function(dataset, i) {
            var meta = chartInstance.controller.getDatasetMeta(i);
            meta.data.forEach(function(bar, index) {
              var data = dataset.data[index];
              ctx.fillText(data, bar._model.x, bar._model.y - 5);
            });
          });
        }
      },
      legend: {
        "display": true
      },
      tooltips: {
        "enabled": false
      },
      scales: {
        yAxes: [{
          display: true,
          gridLines: {
            display: true
          },
          ticks: {
            max: 5,
            display: true,
            beginAtZero: true
          }
        }],
        xAxes: [{
          gridLines: {
            display: true
          },
          ticks: {
            beginAtZero: true
          }
        }]
      }
      }

      var ctx = $("#SPIP");
      var barGraph = new Chart(ctx, {
        type: 'bar',
        data: spipData,
        options: chartOptions
      });
    },
    error: function(data) {
      console.log(data);
    }
  });
});

</script>
