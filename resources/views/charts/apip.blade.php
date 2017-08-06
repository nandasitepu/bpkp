<canvas class ="panel cool" id="APIP" height="200%"></canvas>
<h6 class="label label-default">* : Dengan Catatan (DC)</h6>
<span class="label label-default pull-right">Last Updated : {{ date('M-Y ') }}</span>
<!-- Chart Script -->
<script>
  $(document).ready(function(){
    $.ajax({
      url: "/api/apip",
      method: "GET",
      success: function(data) {
        console.log(data);
        var level = [];
        for (var i in data)
        {
  				level.push(data[i].level);
			  }

        var apipData = {
            labels:  ["Prov", "Polman", "Matra*", "Mamasa*", "Mamuju", "Mateng","Majene"],
            datasets: [
              {
                label: 'Level APIP',
                data: level,
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
        };
        var chartOptions = {
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

        };

        var ctx = $("#APIP");
  			var barGraph = new Chart(ctx, {
  				type: 'bar',
  				data: apipData,
          options: chartOptions
  			});
      },
      error: function(data) {
        console.log(data);
      }
    });
  });

</script>
