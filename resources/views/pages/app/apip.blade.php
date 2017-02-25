@extends('main')

@section('stylesheets')
<style media="screen">
canvas {
    padding: 0;
    margin: auto;
    display: block;
}
</style>
@endsection

@section('content')
  <script type="text/javascript" src="assets/chart.js/dist/Chart.bundle.min.js"></script>
  <div class="row">
    <div class="col-xs-12 col-md-10 col-md-offset-1">
      <div class="panel panel-default text-center">
        <div class="panel-heading">
          <h3 class="panel-title">APIP Sulawesi Barat</h3>
        </div>
        <div class="panel-body text-center" >
            <canvas class="cool text-center"  id="myChart" height="100%"></canvas>
        </div>

      </div>
    </div>
  </div>

  <script>
    var ctx = document.getElementById("myChart").getContext("2d");
    var myChart = new Chart(ctx, {
      responsive: true,
        type: 'bar',
        data: {
            labels:  ["Provinsi Sulawesi Barat", "Kab.Mamuju", "Kab.Majene", "Kab.Polman", "Kab.Mateng", "Kab.Matra","Kab.Mamasa"],
            datasets: [{
                label: 'Level APIP',
                data: [1.8, 2.2, 2.5, 3, 1.1, 1.5, 1.4],
                backgroundColor:
                "#36A2EB"
                ,
                borderColor:
                "#36A2EB"
                ,
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                xAxes: [{
                    ticks: {
                        beginAtZero:true
                    }
                }]
            }

        }
    });
  </script>

@endsection
