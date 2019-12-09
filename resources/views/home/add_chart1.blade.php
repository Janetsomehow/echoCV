@extends('layouts.empty-sidbar')

@section('content')
<div class="container">
    <div class="row"> 
            <div class="col-8" style="border:2px; background-color:red; min-height:800px;">
 <canvas id="barchart"></canvas>
            </div>

            <div class="col-4" style="background-color:blue; min-height:800px;">
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
</div>
 @stop