@extends('layouts.sidbar')

@section('content')
<section  class="container">
<div>
<ul class="list-inline">
    <li><a data-toggle="pill" href="#">Dashboard 1</a></li>
    <li><a  data-toggle="pill" href="#">Dashboard 2</a></li>
    <li><a  data-toggle="pill" href="#">&plus;</a></li>
  </ul>
  </div>

<div class="dashbtn">
<input type="cancel" class="btn btn-primary" name="Add chart" />
<button class="btn">share</button>
</div>
<hr>

<div class="chart-container">
<canvas id="barchart" width="90" height="70"></canvas>
<canvas id="lineid" width="90" height="70"></canvas>
<canvas id="piechart" width="40" height="20"></canvas>
</section>
@stop