@extends('layouts.sidbar')

@section('content')
<div  class="container-fluid">
  <div>
<div>
<ul class="nav nav-pills">
    <li class="active"><a data-toggle="pill" href="#">Dashboard 1</a></li>
    <li><a  data-toggle="pill" href="#">Dashboard 2</a></li>
    <li><a  data-toggle="pill" href="#">&plus;</a></li>
  </ul>
  </div>
  <div class="dashbtn">
<button type="submit" class="btn btn-primary" data-toggle="modal" data-target="#mymodal">Add chart</button>
<button class="btn">share</button>
</div>
      <!--pop up modal for add chart-->
      <div class="modal" id="mymodal">
      <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
      <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
</div>
<div class="modal-body">
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
            </div>
          </div>
      </div>   
    </div>

<hr>
<div class="flex-container">
  <div class="chart-container">
<div style="width:39vw; height:29vw;">
<canvas id="barchart"  width="200" height="130"></canvas>
</div>
<div style="width:39vw; height:49vh;">
<canvas id="lineid"  width="200" height="130"></canvas>
</div>
<div  style="width:39vw; height:29vh;">
<canvas id="piechart"  width="200" height="130"></canvas>
  </div>
      </div>
</div>
</div>
@stop

