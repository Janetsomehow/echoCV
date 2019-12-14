@extends('layouts.sidbar')

@section('content')
<div  class="container">
  <div>
<nav  class="navbar-expand-sm navbar-light"  style="bottom:40rem; top:0.9rem; position:absolute; width:40rem;">
<ul class="navbar-nav">
    <li class="nav-item active">
      <a  class="nav-link" href="#">Dashboard 1</a>
    </li>
    <li class="nav-item active">
      <a   class="nav-link"href="#">Dashboard 2</a>
    </li>
    <li class="nav-item active">
      <a   class="nav-link" href="#">&plus;</a>
  </li>
  </ul>
</nav>
  <div class="dashbtn">
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#chartmodal">Add chart</button>
<button class="btn">share</button>
</div>
</div>
<hr>
<div style="width:39vw; height:29vw;">
<canvas id="barchart"  width="150" height="100"></canvas>
</div>
<div style="width:39vw; height:49vh;">
<canvas id="lineid"  width="150" height="100"></canvas>
</div>
<div  style="width:39vw; height:29vh;">
<canvas id="piechart"  width="150" height="100"></canvas>
  </div>
<!-- Modal -->
<div class="modal metex" id="chartmodal" tabindex="-1" role="dialog" aria-labelledby="chartmodalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-body">
      <div class="row">
          <div class="col-8 ">
          <div class="chart-container">
          <div style="width:39vw; height:29vw;">
<canvas id="barchart"  width="150" height="100"></canvas>
</div>
          </div>
      </div>
          <div class="col-4">
            <div>
            <nav class="navbar-expand-sm navbar-light">
  <ul class="navbar-nav">
    <li class="nav-item active">
      <a class="nav-link" href="#">Metric</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">Export</a>
    </li>
    </ul>
    </nav>
    <button type="submit" class="btn btn-sm btn-primary">Save</button>
    <button type="button" class="btn" data-dismiss="modal">Cancel</button>
</div>
      <div>
size<br>
<select class="col-10 dropdown-toggle" data-toggle="dropdown">
<option>Powerpoint</option>
<option class="dropdown-item">standard(600 x 400)</option>
<option class="dropdown-item">powerpoint (16:1)</option>
</select>
Format<br>
<input type="radio">Microsoft excel(.xlxs)
<input type="radio">PNG
<input type="radio">PDF
<br>
<input type="checkbox">Save to Google drive as CSV file<br>
<button type="button" class="btn btn-light">Export sales and exit</button>
          </div>
        </div>
      </div>
    </div>
      </div>
    </div>
</div>
@stop
