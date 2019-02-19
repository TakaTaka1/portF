@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <!-- <div class="col-md-12" id="mychart" style="height: 600px;"></div> -->
        </div>        
    </div>
      <ul class="nav justify-content-center">
          <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#tag_charts">Chart</a></li>
          <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#company_info">Site Info</a></li>
          <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#todo">TODO</a></li>
      </ul>
      <div class="tab-content">
        <div id="tag_charts" class="tab-pane active">
          <div class="col-md-12" id="mychart" style="height: 600px;"></div>
        </div>
        <div id="company_info" class="tab-pane">
          <div class="jumbotron">
            <h1 class="display-4">Company Info</h1>
            <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
            <hr class="my-4">
            <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
            <p class="lead">
              <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
            </p>
          </div>          
        </div>
        <div id="todo" class="tab-pane">
        </div>     
      </div>
</div>
<script src="https://www.gstatic.com/charts/loader.js"></script>
<script>
  (function(){
    'use strinct';

    var navLink = document.getElementsByClassName('nav-link');

    var i;

    for (i=0; i < navLink.length; i++) {
      navLink[i].addEventListener('click', function(e){
        e.preventDefault();

        var i;
        for (i=0; i < navLink.length; i++) {
            navLink[i].className = 'nav-link';
        }
        this.className = 'nav-link active'
      });
    }
  })();



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

