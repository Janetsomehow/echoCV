@extends('layouts.sidbar')

@section('content')
<div class="row"> 
 <div col-sm-8>
 <canvas id="barchart"></canvas>
 </div>

<div class="col-sm-4">
     <div>
     <ul class="list-inline">
    <li><a data-toggle="pill" href="#">metrics</a></li>
    <li><a  data-toggle="pill" href="#">export</a></li>
  </ul>
<a hre="#">Cancel</a>
  <button class="btn btn-primary">save</button>
</div>
     <form>
</form>
</div>
</div>
 @stop