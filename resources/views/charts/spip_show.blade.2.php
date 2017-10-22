<canvas class ="panel cool" id="SPIP" height="175%" ></canvas>
<div class="table table-responsive ">
            <table class="table table-condensed table-bordered table-striped" style="background-color:#fff" id="empTable">
              <thead>
                <tr class="text-center">
                  <td>No</td>
                  <td>Unsur SPIP</td>
                  <td>Skor</td>
                </tr>
              </thead>
              <tbody class="text-center">
                  <tr>
                    <td>1</td>
                    <td>Lingkungan Pengendalian</td>
                    <td id="chart_unsur_1" class="unsur">{{ $pemda->lingkungan_pengendalian }}3</td>
                  </tr>
                  <tr>
                    <td>2</td>
                    <td>Penilaian Risiko</td>
                    <td id="chart_unsur_2" class="unsur">{{ $pemda->penilaian_risiko }}3</td>
                  </tr>
                  <tr>
                    <td>3</td>
                    <td>Kegiatan Pengendalian</td>
                    <td id="chart_unsur_3" class="unsur">{{ $pemda->kegiatan_pengendalian }}3</td>
                  </tr>
                  <tr>
                    <td>4</td>
                    <td>Informasi dan Komunikasi</td>
                    <td id="chart_unsur_4" class="unsur">{{ $pemda->informasi_dan_komunikasi }}3</td>
                  </tr>
                  <tr>
                    <td>5</td>
                    <td>Pemantauan Berkelanjutan</td>
                    <td id="chart_unsur_5" class="unsur">{{ $pemda->pemantauan_berkelanjutan }}3</td>
                  </tr>
              </tbody>
            </table>
          </div>
<!-- Chart Script -->
<script>
    // Set Chart Data From HTML Table
    function showTableLabel()
    {                       
        var labels = [];

        var rows = $("tr");
        rows.each(function(index){
            if (index != 0) // we dont need first row of table
            {
                var cols = $(this).find("td");      
                labels.push(cols.first().text());                           
            }
        });
        return labels;
    }

    function showTableData()
    {   
    var data;
    var datasets = [];
    var rows = $("tr");
    rows.each(function(index){
        if (index != 0) // we dont need first row of table
        {
            var cols = $(this).find("td");  
            var data = [];
            cols.each(function(innerIndex){
                if (innerIndex!=0) // we dont need first columns of the row                 
                    data.push($(this).text());                                          
            });
	       
            datasets.push(data);

        }
    });
    return datasets;
    }


    var tableData = {
        labels: showTableLabel(),
        datasets : showTableData()
    };

    // Draw Chart
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
                data: tableData,
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


