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
</div>
<!-- Modal -->
<div class="modal" id="chartmodal" tabindex="-1" role="dialog" aria-labelledby="chartmodalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="chartmodalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <div class="row">
      <div class="col-sm-9">
        Level 1: .col-sm-9
        <div class="row">
          <div class="col-8 col-sm-6">
            Level 2: .col-8 .col-sm-6
          </div>
          <div class="col-4 col-sm-6">
            Level 2: .col-4 .col-sm-6
          </div>
        </div>
      </div>
    </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

</div>
@stop
