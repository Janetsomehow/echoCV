@extends('layouts.sidbar')

@section('content')
<section class="chart-container">
<div>
<p>Dashboard 1</p>
<div style="text-align:right;">
<input type="submit" class="btn btn-primary" name="Add chart" />
<button>share</button>
</div>
</div>
<hr>
<div>
<canvas id="barchart" width="130" height="90"></canvas>
<canvas id="lineid" width="130" height="90"></canvas>
<div>
<canvas id="piechart" width="90" height="40"></canvas>
</div>
</div>
</section>
@stop