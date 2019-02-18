@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="col-md-12" id="mychart" style="height: 600px;"></div>
        </div>        
    </div>
</div>
<script src="https://www.gstatic.com/charts/loader.js"></script>
<script>
  google.charts.load("current", {"packages":["corechart"]});
  google.charts.setOnLoadCallback(myChart);

  function myChart() {
   var data = google.visualization.arrayToDataTable([
    ["タグ",      "", { role:"style" }],
    ["h1",            11, "red"   ],
    ["h2",             8, "orange"],
    ["h3",             3, "yellow"],
    ["h4",             2, "green" ],
   ]);

   var options = {
    title:"タグ数計測値",
   };

   var chart = new google.visualization.ColumnChart(document.getElementById("mychart"));
   chart.draw(data, options);
  }
</script>
@endsection

