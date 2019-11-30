@extends('layouts.sidbar')

@section('content')
<div>
<div>
<a href="#"><p>Dashboard 1</p></a>
<p style="text-align:left;"><a href="#">Dashboard 2</a></p>
<div style="text-align:right;">
<input type="submit" class="btn btn-primary" name="Add chart" />
<button>share</button>
</div>
</div>
<hr>
<div>
<canvas id="barChart"></canvas>
<canvas id="pieChart" width="299" height="250"></canvas>
<canvas id="lineid"></canvas>
</div>
</div>
@stop