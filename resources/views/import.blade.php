<!DOCTYPE html>
<html>
<head>
    <title>Laravel 6 Import Export Excel to database - Tuts Make</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" />
</head>
<body>
  <div class="">
    @include('inc.messages')
  </div>
<div class="container">
    <div class="card mt-4">
        <div class="card-header">
            Laravel 6 Import Export Excel to database - Tuts Make
        </div>
        <div class="card-body">

            <form action="{{ route('import') }}" method="POST" name="importform"
               enctype="multipart/form-data">
                 @csrf
                 <input type="text" class="form-control" name="name">
                 <input type="text" class="form-control" name="desc">
                <input type="file" name="file" class="form-control">
                <br>
                <a class="btn btn-info" href="{{ url('export') }}">
                 Export File</a>
                <button class="btn btn-success">Import File</button>
            </form>
        </div>
    </div>
</div>
@if(count($graphs) > 0)
<div class="container mt-4">
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>S/N</th>
        <th>Name</th>
        <th>Description</th>
        <th>Field1</th>
        <th>value1</th>
        <th>Field2</th>
        <th>value</th>
        <th>Field3</th>
        <th>value3</th>
        <th>Field4</th>
        <th>value4</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($graphs as $graph)
      <tr onclick="window.location='/graph/build/bar'">
        <th>{{ $graph->id}}</th>
        <td>{{ $graph->name}}</td>
        <td>{{ $graph->desc}}</td>
        <td>{{ $graph->aaa}}</td>
        <td>{{ $graph->aaa1}}</td>
        <td>{{ $graph->bbb}}</td>
        <td>{{ $graph->bbb1}}</td>
        <td>{{ $graph->ccc}}</td>
        <td>{{ $graph->ccc1}}</td>
        <td>{{ $graph->ddd}}</td>
        <td>{{ $graph->ddd1}}</td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
@endif


</body>
</html>
