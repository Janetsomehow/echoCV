@extends('layouts.sidbar')

@section('content')
<div  class="container-fluid">
<div>
<ul class="nav nav-pills">
    <li class="active"><a data-toggle="pill" href="#">Dashboard 1</a></li>
    <li><a  data-toggle="pill" href="#">Dashboard 2</a></li>
    <li><a  data-toggle="pill" href="#">&plus;</a></li>
  </ul>
  </div>
  <div class="dashbtn">
<input type="submit" class="btn btn-primary" name="Add chart">
<button class="btn">share</button>
</div>
<hr>
<div class="chart-container">
<div class="flex-container">
<canvas id="barchart" width="90" height="70"></canvas>
<canvas id="lineid" width="90" height="70"></canvas>
<canvas id="piechart" width="40" height="20"></canvas>
</div>
  </div>
</div>
@stop

