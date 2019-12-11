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
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#chartmodal">Add chart</button>
<button class="btn">share</button>
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
<!-- Modal -->
<div class="modal" id="chartmodal" tabindex="-1" role="dialog" aria-labelledby="chartmodalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
          <span aria-hidden="true">&times;</span>
      </div>
      <div class="modal-body">
      <div class="row">
          <div class="col-8 ">
          <p>Some text to enable scrolling.. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
          </div>
          <div class="col-4">
          <p>Some text to enable scrolling.. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
          </div>
        </div>
      </div>
    </div>
      </div>
    </div>
</div>
@stop
